<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
    <style>
        .nav-item a:hover {
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }

       
    </style>
</head>
<body>
<section class="container-fluid bg-light" >
        @include("header")
        <div class="p-5"></div>
        <div class="row justify-content-center p-5 text-center " data-aos="fade-up">
            <h1 class="col col-7 text-dark p-5 " style="font-size:30px;">Your Order Successfully Take By Us</h1>
        </div>
        <div class="row">
        </div>
    </section>
    @include('footer')
</body>
</html>