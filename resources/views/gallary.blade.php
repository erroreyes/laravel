<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
        <div class="container-fluid  p-5">
            <div class="row justify-content-center">
                <div class="col col-md-3"> 
                    <img src="{{asset('images/food5.jpg')}}" alt="" width="100%" height="300px">
                </div>
                <div class="col col-md-3"> 
                    <img src="{{asset('images/food2.jpg')}}" alt="" width="100%" height="300px">
                </div>
                <div class="col col-md-3"> 
                    <img src="{{asset('images/food3.jpg')}}" alt="" width="100%" height="300px">
                </div>
                <div class="col col-md-3"> 
                    <img src="{{asset('images/food4.jpg')}}" alt="pancake-with-banana-shade" width="100%" height="300px">
                </div>
            </div>
        </div>

</body>
</html>