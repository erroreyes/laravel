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
        .nav-item a:hover{
            background-color:salmon;
            transition: all 0.6s;
        }
        #txt{
            color: salmon;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark">
        <nav class="navbar expand-sm  p-1">
            <ul class="nav">
                <li class="nav-item text-white">
                    <a href="home" class="btn  btn-md m-1 text-white" id="first">Home</a>
                    <a  class="btn btn-md m-1 text-white">Gallary</a>
                    <a href="login" class="btn btn-md m-1 text-white">login</a>
                </li>
            </ul> 
        </nav>
    </div>
</body>
</html>