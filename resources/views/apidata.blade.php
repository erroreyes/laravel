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
    <div class="p-5 "></div>
    <div class="container w-50 w-100 w-75 w-25 p-5">
       
        <table class="table table-striped p-5">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>F_name</th>
                <th>L_name</th>
                <th>Avtar</th>
            </tr>
            @foreach($data as $info)
            <tr>
                <td>{{$info['id']}} </td>
                <td>{{$info['email']}}</td>
                <td>{{$info['first_name']}}</td>
                <td>{{$info['last_name']}} </td>
                <td><img src="{{$info['avatar']}}" alt="picture"></td>
            </tr>
            @endforeach
        </table>
        
    </div>
</body>

</html>