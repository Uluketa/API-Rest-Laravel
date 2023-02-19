<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API - Uluketa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');

        body {
            margin: 0;
            padding: 0;
            border: 0;

            font-family: 'Roboto Mono', monospace;
            background-color: #242340;
        }

        .container {
            text-align: center;
            width: 100vw;
            height: 65vh;
            padding-top: 35vh;
        }

        img{
            height: 30vh;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{!! asset('storage/avatar.png') !!}">
    </div>
</body>

</html>
