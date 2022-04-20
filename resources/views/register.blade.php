<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        color: salmon;
    }
</style>

<body>

    @include("header")
    <div class="container w-75 bg-dark">
        <div class="row  justify-content-center p-3">
            <h1 class="col col-md-6">Registration Form</h1>
        </div>
        <form action="register" method="post" enctype="multipart/form-data">
            @csrf
            <!-- @if($errors->any())
            @foreach($errors->all() as $err)
            <h5>{{$err }}</h5>
            @endforeach
            @endif -->
            <div class="form-row ">
                <div class="form-group col-sm-6">
                    <label>Fname :</label>
                    <input type="text" name="fname" class="form-control">
                    <span class="text-white">@error('fname'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-6">
                    <label>Lname :</label>
                    <input type="text" name="lname" class="form-control">
                    <span class="text-white">@error('lname'){{$message}} @enderror</span>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-md-4"><br>
                    <label>Gender :</label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </div>
                <div class="form-group col-md-4">
                    <label>DOJ :</label>
                    <input type="date" name="doj" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label>Age :</label>
                    <input type="text" name="age" class="form-control">
                </div>


            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Salary :</label>
                    <input type="text" name="salary" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Department :</label>
                    <select name="dept" class="form-control">
                        <option value="sale">Sale</option>
                        <option value="purchase">Purchase</option>
                        <option value="red">RED</option>
                        <option value="marketing">Marketing</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Image :</label>
                    <div class="custom-file">

                        <input type="file" id="customfile" class="custom-file-input" name="file">
                        <label class="custom-file-label" id="customfile">choose image file</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label>Password :</label>
                    <input type="password" name="pass" class="form-control">
                    <span class="text-white">@error('pass'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                    <label>Confirm Password :</label>
                    <input type="password" name="confirm" class="form-control">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2 ">
                    <label>Hobby:</label>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="football"> Football <br>
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket"> Cricket <br>
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Dancing"> Dancing <br>
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Singing"> Singing
                </div>
                <div class="form-group col-md-4  "><br><br>
                    <input type="submit" value="Submit" name="submit" class="btn btn-info">
                    <a href="register" class="btn btn-danger ">reset</a><br>
                    Already have an account <a href="#">Login here</a>
                </div>
            </div>

            <br>
        </form>
    </div>
</body>

</html>
</body>

</html>