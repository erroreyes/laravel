<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
       

        .nav img {
            display: flex;
            flex-direction: row-reverse;
        }

      
    </style>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar p-1 ">
            <img src="{{asset('images/logo.png')}}" alt="" height="70px" width="160px">
            <ul class="nav justify-content-end">
                <li class="nav-item" id="txt_color"> <a href="home" class="btn  btn-md " id="first">Home</a> </li>
                <li class="nav-item"> <a href="gallary" class="btn btn-m">Gallary</a></li>
                <li class="nav-item"><a href="profile" class="btn btn-md">Profile</a></li>
                <li class="nav-item"> <a href="login" class="btn btn-md">Login</a></li>
                <li class="nav-item"><a href="register" class="btn btn-md">Registration</a></li>
                
            </ul>
        </nav>
    </header>
  
</body>

</html>