<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
        <form action="imagefile" enctype="multipart/form-data" method="POST" class="bg-warning p-5">
            @csrf
           
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</body>


</html>