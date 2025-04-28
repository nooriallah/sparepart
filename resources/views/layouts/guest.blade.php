<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>


    {{--    Slider --}}
    @if(\Illuminate\Support\Facades\Request::is("serp*"))
        <link rel="stylesheet" href="https://sliderm.com/dist/1.0.8/sliderm.css">
        <script src="https://sliderm.com/dist/1.0.8/sliderm.js"></script>
    @endif

    {{-- Custom style   --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/style.css">

    @if(\Illuminate\Support\Facades\Request::is("*login*"))
        <link rel="stylesheet" href="/backend/css/style.css">
    @endif


</head>

<body class="@if(\Illuminate\Support\Facades\Request::is("*login*")) vh-100 @endif">


{{ $slot }}
</body >

{{-- Bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

{{--Slider javascript--}}
@if(\Illuminate\Support\Facades\Request::is("serp*"))
    <script>
        const sliderm = new Sliderm('#category_slider', {
            arrow: true,
            pagination: false,
            grouping: false,
            loop: true,
            preview: true,
            columns: 6,
            duration: 100,
            spacing: 10,
            align: 'center',
            touch: true,

            _arrow: {
                color: '#ffffff',
                bgColor: '#000000',
                opacity: 0.2,
                size: 16,
                shape: 'circle',
                bold: 2,
            },
            _preview: {
                edge: 100,
            },
            _breakpoint: {
                columns: {
                    6: false,
                    4: 960,
                    6: 768,
                    1: 420,
                },
            },
        });

        sliderm.on('slide.start', () => {
            console.log('Just starting to slide!');
        });

        sliderm.on('slide.end', () => {
            console.log('The slider is stopped.');
        });


    </script>


@endif


</html>

