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
        color: black;
    }

    .nav-item a {
        color: white;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.6);
        border: 1px solid black;
    }
</style>

<body id="back">

    @include("header")
    <div class="container w-75 " id="txt">
        <div class="row  justify-content-center p-3 m-5">
            <h1 class="col col-12 text-center">Registration Form</h1>
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
                    <input type="radio" name="gender" value="female"> Female <br>

                    <span class="text-white">@error('gender'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4">
                    <label>DOJ :</label>
                    <input type="date" name="date" class="form-control" value="{{old('date')}}">
                    <span class="text-white">@error('date'){{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-4">
                    <label>Age :</label>
                    <input type="text" name="age" class="form-control" value="{{old('age')}}">
                    <span class="text-white">@error('age'){{$message}} @enderror</span>
                </div>


            </div>
            <!-- <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Salary :</label>
                    <input type="text" name="salary" class="form-control" value="{{old('salary')}}">
                    <span class="text-white">@error('salary'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4">
                    <label>Department :</label>
                    <select name="department" class="form-control">
                        <option value="" selected disabled>--choose department</option>
                        <option value="sale">Sale</option>
                        <option value="purchase">Purchase</option>
                        <option value="red">RED</option>
                        <option value="marketing">Marketing</option>
                    </select>
                    <span class="text-white">@error('department'){{$message}} @enderror</span>
                </div> -->
            <div class="form-row justify-content-center">

                <div class="form-group col-6">
                    <label>Imagefile :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customfile" name="imagefile">
                        <label class="custom-file-label" id="customfile">Choose image file</label>
                    </div>
                </div>
                <div class="form-group col-6">
                    <label>File Name</label>
                    <select name="file_name" class="form-control">
                        <option value="" selected disabled>--- Select File name ---</option>
                        <option value="random">Random Name</option>
                        <option value="original">Original Name</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label>Folder Name :</label>
            </div>
            <div class="form-row">
                <div class="input-group col-md-9">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" name="check" id="checkbox">
                            <!-- <label>Click Here if you want to add Folder Name</label> -->
                        </div>
                    </div>
                    <input type="text" name="folder_name" class="form-control" id="foldername" disabled>
                </div>
            </div>
            <div class="form-row p-3">
                <div class="form-group col-md-6">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}">
                    <span class="text-white">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                    <label>Password :</label>
                    <input type="password" name="passcode" class="form-control" value="{{old('passcode')}}">
                    <span class="text-white">@error('passcode'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                    <label>Confirm Password :</label>
                    <input type="password" name="confirm" class="form-control" value="{{old('confirm')}}">
                    <span class="text-white">@error('confirm'){{$message}} @enderror</span>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-2 ">
                    <label>Favourite Drinks:</label>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Hot Chocolate" @if ("checkbox"=="football" ) selected @endif> Hot Chocolate <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Orange Juice" @if ("checkbox"=="Cricket" ) selected @endif> Orange Juice <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Apple Juice" @if ("checkbox"=="Dancing" ) selected @endif> Apple Juice <br>
                    <input class="form-check-input" type="checkbox" name="checkbox" value="Soft Drinks" @if ("checkbox"=="Singing" ) selected @endif> Soft Drinks <br>
                    <span class="text-white">@error('checkbox'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-4  "><br><br>
                    <input type="submit" value="Submit" class="btn btn-info">
                    <a href="register" class="btn btn-danger ">reset</a><br><br>
                    Already have an account <a href="login" class="text-white" style="text-decoration: none;">Login here</a>
                </div>
            </div>

            <br>
        </form>
    </div>
    <script>
        const folderName = document.getElementById('foldername');
        const checkbox = document.getElementById('checkbox');
     
        const click= checkbox.addEventListener('click', () => {
            folderName.disabled = false;
        });
    </script>
</body>

</html>