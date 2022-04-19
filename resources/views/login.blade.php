
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
    @include("header")
    <div class=" p-5"></div>
    <div class="container w-50 bg-dark  h-100 p-2" id="txt">
        <div class="row  justify-content-center p-3">
            <h1 class="col col-md-4">login page</h1>
        </div>
        
        <form action="login" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label>Username :</label>
                    <input type="text" name="userid" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label>Password :</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <input type="submit" name="submit" value="Signin" class="btn btn-info">
                    <a href="#" class="btn btn-danger">Cancel</a><br>
                    Don't have an account <a href="#">Register</a>
                </div>
        </form>
    </div>
</body>

</html>