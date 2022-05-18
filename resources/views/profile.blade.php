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
        .nav-item a:hover{
            background-color:orange;
            transition: all 0.6s;
            color: black;
        }
        .container{
            background-color:rgba(0, 0, 0, 0.6);
            border: 1px solid black;
        }
        .nav li a{
            color:white;
        }

    </style>
</head>
<body id="profile">
<div class="container-fluid">
        <ul class="nav">
            <li class="text-left nav-item col-6"><a href="home" class="btn btn-md m-1">Home</a></li>
            <li class="text-right nav-item col-6"><a href="logout" class="btn btn-md m-1">Logout</a></li>
        </ul>
        </div>   
    <div class="container m-auto row justify-content-center text-white p-5"> 
    <h1> Hello <br>{{session('user')}} <br>Welcome to our restuarant</h1> 
    </div> 
    <div class="text-center p-3">
   </div>
  
</body>
</html>