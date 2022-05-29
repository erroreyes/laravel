<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>profile</title>
    <style>
        #txt {
            color: orange;
        }

        .nav-item a:hover {
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid black;
        }

        .nav li a {
            color: white;
        }
    </style>
</head>

<body id="profile">
    <div class="container-fluid">
        <nav class="navbar p-1 ">
            <img src="{{asset('images/logo.png')}}" alt="" height="70px" width="160px">
            <ul class="nav justify-content-end">
                <li class="nav-item" id="txt_color"> <a href="home" class="btn  btn-md m-1" id="first">Home</a> </li>
                <li class="nav-item"> <a href="gallary" class="btn btn-md m-1">Gallary</a></li>
                <li class="nav-item"> <a href="about    " class="btn btn-md m-1">About</a></li>
                <li class="nav-item "><a href="logout" class="btn btn-md m-1">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="container m-auto row justify-content-center text-white p-5">
        <h1> Hello <br>{{session('user')}} <br>Welcome to our restuarant</h1>
    </div>
    <div class="text-center p-3">
    </div>

</body>

</html>