<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
    <style>
        .nav-item a:hover{
            background-color:orange;
            transition: all 0.6s;
            color: black;
        }
        .nav-item a{
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="back">
    @include("header")
        <div class="row justify-content-center p-5">
            <h1 class="col col-lg-5"></h1>
        </div>
    </div>
</body>
</html>