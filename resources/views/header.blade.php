<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <script type="text/javascript" src="jquery.js"></script>
    <style>
        .nav-item a {
            color: white;
        }

        .nav img {
            display: flex;
            flex-direction: row-reverse;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar p-1">
        <img src="{{asset('images/logo.png')}}" alt="" height="70px" width="160px">
            <ul class="nav justify-content-end">
                    <li class="nav-item" id="txt_color"> <a href="home" class="btn  btn-md " id="first">Home</a> </li>
                    <li class="nav-item"> <a href="gallary" class="btn btn-m">Gallary</a></li>
                    <li class="nav-item"> <a href="login" class="btn btn-md">Login</a></li>
                    <li class="nav-item"><a href="register" class="btn btn-md">Registration</a></li>
                    <li class="nav-item"><a href="about" class="btn btn-md">About Us</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>