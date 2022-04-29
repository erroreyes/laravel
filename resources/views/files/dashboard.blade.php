<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>try again !</h1>
    <div class="container">
    <table class="table table-stripped bg-success">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>{{old('username')}}</td>
            <td>{{old('password')}}</td>
        </tr>
    </table>
    </div>

</body>
</html>