{{-- <link rel="stylesheet" href="{{ asset('build/assets/app-B4K3nAQ8.css') }}" /> --}}
@vite('resources/css/app.css')

{{-- meta tags --}}
<meta charset="UTF-8">
{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">


{{-- jquery --}}
<script src="{{ asset('assets/plugin/jquery/jquery-3.7.1.min.js') }}" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- aframe --}}
<script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>

{{-- toastify --}}
<link href="{{ asset('assets/plugin/toastify/toastify.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/plugin/toastify/toastify.min.js') }}"></script>


{{-- ripple --}}
{{-- <script src="{{ asset('assets/plugin/ripple/ripple.min.js') }}"></script> --}}
<link rel="stylesheet" href="{{ asset('assets/plugin/ripple/ripple.min.css') }}" />



<link rel="stylesheet" href="https://uicdn.toast.com/tui-image-editor/latest/tui-image-editor.min.css" />
<script src="https://uicdn.toast.com/tui-code-snippet/latest/tui-code-snippet.min.js"></script>
<script src="https://uicdn.toast.com/tui-color-picker/latest/tui-color-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui-image-editor/latest/tui-image-editor.min.js"></script>


<link rel="stylesheet" href="{{ asset('assets/plugin/swiper/swiper-bundle.min.css') }}" />



<link href="https://cdn.jsdelivr.net/npm/video.js@8.21.0/dist/video-js.min.css" rel="stylesheet">

{{-- animate css --}}
{{-- <link rel="stylesheet" href="{{ asset('animate') }}"/> --}}
<link
rel="stylesheet"
href="{{ asset('assets/plugin/animate/animate.min.css') }}"
/>

{{-- awesome --}}
<link href="{{ asset('assets/plugin/awesome/all.min.css') }}" rel="stylesheet">

{{-- lightbox --}}
<link href="{{ asset('assets/plugin/lightbox/lightbox.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/plugin/lightbox/lightbox.min.js') }}"></script>


{{-- lozad --}}
<script type="text/javascript" src="{{ asset('assets/plugin/lozad/lozad.min.js') }}"></script>

{{-- js --}}
{{-- <script src="{{ asset('assets/js/scripts.js') }}"></script> --}}


{{-- DataTables CSS --}}
<link rel="stylesheet" href="{{ asset('assets/plugin/dataTables/jquery.dataTables.min.css') }}">

{{-- DataTables Responsive CSS --}}
<link rel="stylesheet" href="{{ asset('assets/plugin/dataTables/responsive.dataTables.min.css') }}">

{{-- DataTables JS --}}
<script src="{{ asset('assets/plugin/dataTables/jquery.dataTables.min.js') }}"></script>

{{-- DataTables Responsive JS --}}
<script src="{{ asset('assets/plugin/dataTables/dataTables.responsive.min.js') }}"></script>


<script src="{{ asset('assets/plugin/sweetalert/sweetalert2@11.js') }}"></script>
