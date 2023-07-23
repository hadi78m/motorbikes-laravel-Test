<!DOCTYPE html>
<html lang="fa" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>

<body>
    @section('nabvar')
    <x-elements.navbar />
    @show

  

    @yield('content')


    @section('footer')
    <footer
        class="absolute left-0 right-0 top-[790px] bottom-0 h-[273px] p-[48px_8px] bg-gray-100 text-center lg:text-center">
        {{--
        <x-elements.footer /> --}}
    </footer>
    @show
</body>

</html>