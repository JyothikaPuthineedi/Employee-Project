<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Update Employee Details</title>
</head>
<body>
    <div class="container">
        <form action="/updateemployee" method="POST">
            @csrf
            @method('POST')
            <h4 class="display-4 text-center">Update Employee Details</h4><hr>
            <div class="form-group">
                <input type="hidden" class="form-control" name="emp_id" value="{{$data->emp_id}}">
            </div>
            <div class="form-group">
                <label>Employee First Name</label>
                <input type="text" class="form-control" name="emp_firstname" value="{{$data->emp_firstname}}">
            </div>
            <div class="form-group">
                <label>Employee Last Name</label>
                <input type="text" class="form-control" name="emp_lastname" value="{{$data->emp_lastname}}">
            </div>
            <div class="form-group">
                <label>Employee Mobile Number</label>
                <input type="text" class="form-control" name="mobile_num" value="{{$data->mobile_num}}">
            </div>
            <div class="form-group">
                <label>Employee Date Of Birth</label>
                <input type="text" class="form-control" name="date_of_birth" value="{{$data->date_of_birth}}">
            </div>
            <div class="form-group">
                <label>Employee Gender</label>
                <input type="text" class="form-control" name="gender" value="{{$data->gender}}">
            </div>
            <div class="form-group">
                <label>Employee Communication Address</label>
                <input type="text" class="form-control" name="comm_address" value="{{$data->comm_address}}">
            </div>
            <div class="form-group">
                <label>Employee City</label>
                <input type="text" class="form-control" name="city" value="{{$data->city}}">
            </div>
            <div class="form-group">
                <label>Employee Type</label>
                <input type="text" class="form-control" name="user_type" value="{{$data->user_type}}">
            </div>
                        
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</body>
</html>