<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value)
    data-{{$key}}='{{$value}}'
    @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title> | اقرا جنيفا{{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('admin._layout.head')
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value)
    data-{{$key}}="{{$value}}"
        @endforeach
        @endisset
    >
        @include('admin._layout.nav')
    </div>
    <main>
        @yield('content')
    </main>
    @include('admin._layout.footer')
</div>
@include('admin._layout.modal_settings')
@include('admin._layout.modal_search')
@include('admin._layout.scripts')
</body>

</html>
