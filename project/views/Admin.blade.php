<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="info" method="POST">
    @if(Session::has('fail'))
                    <div class="alert-danger">{{Session::get('fail')}}</div>
                    @endif
        @csrf

        <table border=1>
        <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile No</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>operation</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employee as $item)
           <tr>
                <td>{{$item['emp_id']}}</td>
                <td>{{$item['emp_firstname']}}</td>
                <td>{{$item['emp_lastname']}}</td>
                <td>{{$item['mobile_num']}}</td>
                <td>{{$item['date_of_birth']}}</td>
                <td>{{$item['gender']}}</td>
                <td>{{$item['comm_address']}}</td>
                <td>{{$item['city']}}</td>
              <td>  <a href={{"updateemployee/".$item['emp_id']}} class="btn btn-success">Update</a></td>
           </tr>
            @endforeach
               
            </tbody>
        </table>
    </form>
</body>
</html>