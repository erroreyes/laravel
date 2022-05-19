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

<body class="bg-dark">
    @include("header")
    <!-- {{count($data)}} -->
    <div class="container w-100 w-75 w-50 w-25 ">
       
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Date</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Department</th>
                <th>Email</th>
                <th>Checkbox</th>
            </tr>
            @foreach($dis as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->Firstname}} </td>
                <td>{{$info->Lastname}}</td>
                <td>{{$info->gender}}</td>
                <td>{{$info->date}} </td>
                <td>{{$info->age}} </td>
                <td>{{$info->salary}} </td>
                <td>{{$info->department}} </td>
                <td>{{$info->email}} </td>
                <td>{{$info->checkbox}} </td>
            </tr>
            @endforeach
        </table>
        
    </div>
</body>

</html>