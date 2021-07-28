<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Assign Projects</h3>
                <hr>
                <form action="addempproject" method="POST">
                    @if(Session::has('sucess'))
                    <div class="alert-success">{{Session::get('sucess')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="proj_id">Project_id</label>
                        <input type="text" class="form-control" placeholder="Enter Project Id" name="proj_id" value="{{old('proj_id')}}">
                        <span class="text-danger">@error('emp_lastname'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="emp_id">Employee_id</label>
                        <input type="text" class="form-control" placeholder="Enter Employee id" name="emp_id" value="{{old('emp_id')}}">
                        <span class="text-danger">@error('mobile_num'){{$message}}@enderror</span>
                    </div>
                
                    <div class="form-group">
                        <button class="btn btn-block btn-color" type="submit">Submit</button>
                    </div><br>
                    <a href="admin">Back Admin</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>