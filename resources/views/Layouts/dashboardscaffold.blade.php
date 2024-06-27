<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('AdminPartial.style')
    {{-- Categoryform Css --}}
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    @include('AdminPartial.sidebar')
    @include('AdminPartial.navbar')  

<main>
    @yield('content')
</main>



    @include('AdminPartial.footer')
    @include('AdminPartial.scripts')
</body>
</html>