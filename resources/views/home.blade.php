<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
    <style>
        .nav-item a:hover {
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }

        .nav-item a {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid" id="back">
        @include("header")
        <div class="p-3"></div>
        <div class="row justify-content-start p-5" data-aos="fade-up">
            <h1 class="col col-6 text-white p-5">Fresh And Delicious Food For Your Health</h1>
            <div class="col-5"> </div>
            <div class="col-2 text-center">
                <button class="btn btn-outline-warning" style="margin-left:-20px;">Order Now</button>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
    @include("footer")
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>