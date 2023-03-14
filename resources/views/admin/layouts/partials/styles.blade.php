<link rel="icon" type="image/png" sizes="32x32" href="{{ config("setting.logos.fav") }}">
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/flagicon/dist/css/flag-icon.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/combined.css') }}">


@yield('style')

<style>
    :root {
        --sidebar-bg-color: {{ config('setting.color.sidebar_color') }};
        --sidebar-txt-color: {{ config('setting.color.sidebar_txt_color') }};
        --top-nav-bg-color: {{ config('setting.color.nav_color') }};
        --top-nav-txt-color: {{ config('setting.color.nav_txt_color') }};
        --main-color: {{ config('setting.color.main_color') }};
        --accent-color: {{ config('setting.color.accent_color') }};
    }

</style>
