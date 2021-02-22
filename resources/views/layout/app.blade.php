<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            padding: 30px;
            background-color: lightblue;
            text-align: center;
            height: 10vh;
        }

        a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            margin: auto;
        }

        .d_flex {
            display: flex;
        }

        .card {
            margin: 50px;
            padding: 30px;
            height: 70vh;
        }

        footer {
            height: 20vh;
            background-color: lightblue;
            text-align: center;
            padding: 50px;
        }
        h1{
            height: 100vh;
        }
    </style>


</head>

<body>
    @include('partials.navbar')
    @include('partials.main')
    @include('partials.footer')
</body>

</html>