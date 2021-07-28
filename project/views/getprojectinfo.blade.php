<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getprojectdetails" method="POST">
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
                </tr>
            </thead>
            <tbody>
            @foreach($getprojectdetails as $item)
           <tr>
                <td>{{$item->emp_id}}</td>
                <td>{{$item->emp_firstname}}</td>
                <td>{{$item->emp_lastname}}</td>
                <td>{{$item->mobile_num}}</td>
                <td>{{$item->date_of_birth}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->comm_address}}</td>
                <td>{{$item->city}}</td>
           </tr>
            @endforeach
            </tbody>
            <a href="admin.blade.php">Back to Admin</a>
        </table>
       
    </form>
</body>
</html>