<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
</head>
<style>
    #txt {
        color: orange;
    }

    .nav-item a:hover {
        background-color: orange;
        transition: all 0.6s;
    }
</style>

<body>

    @include("header")
    <div class="container w-75 bg-dark" id="txt">
        <div class="row  justify-content-center p-3 m-5">
            <h1 class="col col-md-5">Registration Form</h1>
        </div>
        <form action="register" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- @if($errors->any())
            @foreach($errors->all() as $err)
            <h5>{{$err }}</h5>
            @endforeach
            @endif -->
            <div class="form-row ">
                <div class="form-group col-sm-6">
                    <label>Firstname :</label>
                    <input type="text" name="Firstname" class="form-control" value="{{old('Firstname')}}">
                    <span class="text-white">@error('Firstname'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-6">
                    <label>Lastname :</label>
                    <input type="text" name="Lastname" class="form-control" value="{{old('Lastname')}}">
                    <span class="text-white">@error('Lastname'){{$message}} @enderror</span>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-md-4"><br>
                    <label>Gender :</label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <span>@error('gender'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4">
                    <label>DOJ :</label>
                    <input type="date" name="date" class="form-control" value="{{old('date')}}">
                    <span>@error('date'){{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-4">
                    <label>Age :</label>
                    <input type="text" name="age" class="form-control" value="{{old('age')}}">
                    <span>@error('age'){{$message}} @enderror</span>
                </div>


            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Salary :</label>
                    <input type="text" name="salary" class="form-control" value="{{old('salary')}}">
                    <span>@error('salary'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4">
                    <label>Department :</label>
                    <select name="Department" class="form-control">
                        <option value="sale">Sale</option>
                        <option value="purchase">Purchase</option>
                        <option value="red">RED</option>
                        <option value="marketing">Marketing</option>
                    </select>
                    <span>@error('department'){{$message}} @enderror</span>
                </div>

                <!-- <div class="form-group col-md-4">   image 
                    <label>Image :</label>
                    <div class="custom-file">

                        <input type="file" id="customfile" class="custom-file-input" name="Imagefile" value="{{old('Imagefile')}}">
                        <label class="custom-file-label" id="customfile">choose image file</label>
                    </div>
                </div>
                <span>@error('Imagefile'){{$message}} @enderror</span>-->
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}">
                    <span>@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                    <label>Password :</label>
                    <input type="password" name="passcode" class="form-control" value="{{old('passcode')}}">
                    <span class="text-white">@error('password'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                    <label>Confirm Password :</label>
                    <input type="password" name="confirm" class="form-control" value="{{old('confirm')}}">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2 ">
                    <label>Hobby:</label>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-check-input" type="checkbox" name="checkbox" value="football"> Football <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Cricket"> Cricket <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Dancing"> Dancing <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Singing"> Singing <br>
                    <span>@error('checkbox'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4  "><br><br>
                    <input type="submit" value="Submit" class="btn btn-info">
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