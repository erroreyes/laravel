<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/image_slider.css')}}">
    <title>Document</title>
    <style>
        .nav-item a:hover{
            background-color:orange;
            transition: all 0.6s;
        }
      
    </style>
</head>
<body class="bg-dark">
    @include('header')
            <div class="slider-container">
                <div class="image-container">
                    <img src="{{asset('images/food.jpg')}}" alt="food" height="350px" width="450px">
                    <img src="{{asset('images/food1.jpg')}}" alt="food" height="350px" width="450px">
                    <img src="{{asset('images/food2.jpg')}}" alt="food" height="350px" width="450px">
                </div>
                <i class="fas fa-angle-double-left box prev"></i>
                <i class="fas fa-angle-double-right box next"></i>
            </div>
    <script src="{{asset('javascript/image_slider.js')}}"></script>

</body>
</html>