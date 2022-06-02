<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        #txt {
            color: orange;
        }
        .nav-item a{
            color: white;
        }
        .nav-item a:hover {
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }

        .table {
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid black;
        }

        .table tr {
            color: black;
        }
        .container{
            font-size: 18px;
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="navbar p-1 ">
       <h1>{{session('admin')}} </h1>
        <ul class="nav justify-content-end">
            <li class="nav-item" id="txt_color"> <a href="home" class="btn  btn-md m-1" id="first">Home</a> </li>
            <li class="nav-item"> <a href="gallary" class="btn btn-md m-1">Gallary</a></li>
            <li class="nav-item "><a href="logout" class="btn btn-md m-1">Logout</a></li>
        </ul>
    </nav>
    <div class="container p-5   ">
        <div class="table-responsive-xl">
            <table class="table table-striped ">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Date</th>
                    <th>Age</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Checkbox</th>
                </tr>
                @foreach($dis as $info)
                <tr>
                    <td>{{$info->Firstname}} </td>
                    <td>{{$info->Lastname}}</td>
                    <td>{{$info->gender}}</td>
                    <td>{{$info->date}} </td>
                    <td>{{$info->age}} </td>
                    <td><img src="{{$info->imagefile}}" alt="" width="100px" height="100px"> </td>
                    <td>{{$info->email}} </td>
                    <td>{{$info->checkbox}} </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>