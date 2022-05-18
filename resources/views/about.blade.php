<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
    <style>
        #txt {
            color: orange;
        }
        .nav-item a:hover{
            background-color:orange;
            transition: all 0.6s;
            color: black;
        }
        .container{
            background-color:rgba(0, 0, 0, 0.6);
            border: 1px solid black;
        }

    </style>
</head>
<body id="about">
    @include('header')
</body>
</html>