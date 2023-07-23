<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @spladeHead
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('css/dist/tw-elements/tw-elements.min.css')}}" />
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    @splade

    <script src="{{asset('js/dist/tw-elements/tw-elements.umd.min.js')}}"></script>
</body>

</html>