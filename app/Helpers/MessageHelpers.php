<?php

namespace App\Helpers;

use App\Models\Log\LogPath;
use Illuminate\Support\Facades\Auth;

class CustomMessage
{
    public static function CreateMessage($status, $message, $data = null)
    {
        $response = [
            'status' => $status,
            'message' => $message,
        ];

        if ($data !== null) {
            $response['data'] = $data;
        }

        return $response;
    }

    // remove dash
    public static function remove_dash($numberWithCommas)
    {
        $number = str_replace(',', '', $numberWithCommas);

        $integerValue = intval($number);
        return $integerValue;
    }
    // send sms
    public static function sendPatternSms($username, $password, $from, $pattern_code, $to, $input_data)
    {
        $url = 'https://ippanel.com/patterns/pattern?username=' .
            $username .
            '&password=' .
            urlencode($password) .
            "&from=$from&to=" .
            json_encode($to) .
            '&input_data=' .
            urlencode(json_encode($input_data)) .
            "&pattern_code=$pattern_code";

        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($handler, CURLOPT_POSTFIELDS, $input_data);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);

        curl_close($handler);

        if (is_numeric($response)) {
            return true;
        } else {
            return false;
        }
    }

    // create log
    public static function Log($id,$action, $message, $type ,$platform)
    {
        $response=LogPath::create(attributes: [
            'user_id'=>Auth::user()->id,
            'action'=> $action,
            'message'=> $message,
            'type'=>$type,
            'ip' => request()->ip(),
            'user_agent'=>request()->header('User-Agent'),
            'platform'=>$platform
        ]);

        if($response)
            return true;
        else
            return false;
    }
}
