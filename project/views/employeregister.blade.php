<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg" method="POST">
        @csrf
    <div class="container" style="margin-top:50px">
        <h1>Employee Register</h1><hr>
        <table border=1>
            <thead>
                <tr>
                    <th scope="col">Emp Id</th>
                    <th scope="col">Register Username</th> 
                    <th>Operations</th>
                    <th>update</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employee as $item)
           <tr>
                <td>{{$item['emp_id']}}</td>
                <td><a href={{"info/".$item['emp_id']}}>{{$item['userName']}}</a></td>
                <td><a href={{"delete/".$item['emp_id']}}>Delete</a></td>
                <td><a href={{"edit/".$item['emp_id']}}>Edit</a></td>
                
           </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </form>
</body>
</html>