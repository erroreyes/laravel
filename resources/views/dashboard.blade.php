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
        #txt {
            color: orange;
        }
        .nav-item a:hover{
            background-color:orange;
            transition: all 0.6s;
            color: black;
        }
        .table{
            background-color:rgba(255, 255, 255, 0.5);
            border: 1px solid black;
        }
        .table tr{
            color:black;  
        }
    </style>
</head>

<body id="data"  class="bg-dark">
    @include("header")
    <!-- {{count($data)}} -->
    <div class="container w-100 w-75 w-50 w-25 ">
       
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Age</th>
            </tr>
            @foreach($data as $info)
            <tr>
                <td>{{$info->id}} </td>
                <td>{{$info->email}}</td>
                <td>{{$info->first_name}}</td>
                <td>{{$info->last_name}} </td>
                <td><img src="{{$info->avtar}}" alt="picture"></td>
            </tr>
            @endforeach
        </table>
        
    </div>
</body>

</html>