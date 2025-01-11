@extends('auth.layouts.app')

{{-- title --}}
@section('title', 'login i dashboard dgarts')

{{-- add styles --}}
@section('add_styles')
@endsection

{{-- add modals --}}
@section('add_modals')
@endsection

{{-- contents --}}
@section('content')
    <div class="relative flex flex-wrap content-center justify-center w-screen h-screen text-center">
        {{-- login --}}
        <div class="relative w-11/12 md:w-[450px] bg-white rounded-md shadow-sm h-auto pb-5 p-2">
            {{-- title --}}
            <header class="w-full pt-6 reltive">
                <h1 class="font-sans text-xl font-medium"> Login Dashboard </h1>
            </header>
            {{-- section --}}
            <form class="relative w-full h-auto px-3 pt-5" id="form_login"
                action="{{ route('action.login') }}" method="POST">
                @csrf
                {{-- inputs username --}}
                <div class="static flex flex-col w-full pt-3">
                    <label for="uername"
                        class="font-sans text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit">Uername
                        Or Email:</label>
                    <input id="uername" type="text" placeholder="Write here..." name="username"
                        class="border-blue-500 font-sans input w-full px-[10px] py-[11px] text-base bg-[#e8e8e8] border-2 rounded-[5px] focus:outline-none placeholder:text-black/25" />
                </div>

                {{-- inputs password --}}
                <div class="static flex flex-col w-full pt-3">
                    <label for="input"
                        class="font-sans text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit">Password:</label>
                    <input id="password" type="password" placeholder="Write here..." name="password"
                        class="border-blue-500 font-sans input w-full px-[10px] py-[11px] text-base bg-[#e8e8e8] border-2 rounded-[5px] focus:outline-none placeholder:text-black/25" />
                </div>


                {{-- buttons --}}
                <div class="relative w-full h-auto mt-5">
                    <button data-duration="0.5" data-color="#cbd5e1" data-opacity="0.5"
                        type="submit"
                        class="relative w-full py-2 tracking-widest text-white font-sans bg-black rounded-lg btn-ripple border-[1px] border-black">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

{{-- add scripts --}}
@section('add_scripts')
    @include('js.auth._js-auth')
@endsection
