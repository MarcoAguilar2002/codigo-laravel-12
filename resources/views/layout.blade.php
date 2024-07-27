<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .activo a {
            color: black;
            font-size: 1.1rem;
            transition: color 0.3s ease, font-size 0.3s ease;
            font-weight: bold;
        }
        .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    .card-body {
        padding: 2rem;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    </style>
</head>
<body>
    @include('partials.nav')
    @include('partials.sesion-estado')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .activo a {
            color: black;
            font-size: 1.1rem;
            transition: color 0.3s ease, font-size 0.3s ease;
            font-weight: bold;
        }
        .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    .card-body {
        padding: 2rem;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    </style>
</head>
<body>
    @include('partials.nav')
    @include('partials.sesion-estado')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
</html>