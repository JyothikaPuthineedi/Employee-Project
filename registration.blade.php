<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
         body{
            margin-left:450px;
            background-image: url('/assets/image/registration.jpg');
            background-size: cover;
            background-position: center;
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
        .btn{
	     width:80px;
	     height: 40px;
        }
       .btn-color {
       border-radius: 50px;
        color: #fff;
        background-image: linear-gradient(to right, #FFD54F, #D500F9);
        padding: 8px;
        cursor: pointer;
        border: none !important;
        margin-top: 0px
       }
        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #D500F9, #FFD54F)
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Registration</h3>
                <hr>
                <form action="register_user" method="POST">
                    @if(Session::has('sucess'))
                    <div class="alert-success">{{Session::get('sucess')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="emp_firstname">FirstName</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="emp_firstname" value="{{old('emp_firstname')}}">
                        <span class="text-danger">@error('emp_firstname'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="emp_lastname">LastName</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="emp_lastname" value="{{old('emp_lastname')}}">
                        <span class="text-danger">@error('emp_lastname'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="mobile_num">Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter MobileNumber" name="mobile_num" value="{{old('mobile_num')}}">
                        <span class="text-danger">@error('mobile_num'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="date_of_birth" value="{{old('date_of_birth')}}">
                        <span class="text-danger">@error('date_of_birth'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <input type="radio"   name="gender" value="male">Male</input>
                        <input type="radio"   name="gender" value="female">Female</input>
                        <input type="radio"  name="gender" value="others">others</input>
                    </div>
                    <div class="form-group">
                        <label for="comm_address">Communication Adress</label>
                        <input type="text" class="form-control" placeholder="Enter Communication Adress" name="comm_address" value="{{old('comm_address')}}">
                        <span class="text-danger">@error('comm_address'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" class="form-control">
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Bengaluru">Bengaluru</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Pune">Pune</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="userName">UserName</label>
                        <input type="text" class="form-control" placeholder="Enter UserName" name="userName" value="{{old('userName')}}">
                        <span class="text-danger">@error('user_name'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="user_password" value="{{old('user_password')}}">
                        <span class="text-danger">@error('user_password'){{$message}}@enderror</span>
                    </div> <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-color" type="submit">Register</button>
                    </div><br>
                    <a href="login">Already Registred !! Login Here</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>