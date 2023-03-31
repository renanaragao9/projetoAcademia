<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/layouts.css">
    <link rel="stylesheet" href="/css/index.css">

    <script src="https://kit.fontawesome.com/22ca95af30.js" crossorigin="anonymous"></script>
    <title>@yield('title') - GN</title>
</head>
<body>
    @if(session('msg'))
         <p class="msg"> <i class="fa-solid fa-circle-check"></i>{{ session('msg') }}</p>
    @endif
    
    @yield('content')
</body>
</html>
