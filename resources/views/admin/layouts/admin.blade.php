<!DOCTYPE html>
<html lang="en">

<head>

    {{-- title --}}
    <title>@yield('title')</title>

    {{-- files --}}
    @include('include._files')

    {{-- ajax --}}
    @include('include._ajax')

    @yield('add_styles')

</head>

<body class="bg-gray-200">
    {{-- navbar --}}
    @include('components.partials.navbar')

    {{-- modals --}}
    @yield('add_modals')

    {{-- add modal loading --}}
    @include('components.modals.loading._modal-loading')

    {{-- content --}}
    @yield('content')


    {{-- footer --}}
    {{-- @if (!Route::is('page.feed') && !Route::is('page.dashboard.editor'))
        @include('user.partials._footer')
    @endif --}}

    {{-- add js auth --}}
    {{-- @include('auth.js._js-auth') --}}

    {{-- add scripts --}}
    @yield('add_scripts')

    {{-- include js static and functios --}}
    @include('include._scripts')

</body>

</html>
