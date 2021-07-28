<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pinfo" method="POST">
        @csrf
        <table border=1>
        <table>
        <tr>
                    <th>Project Id</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Project Start Date</th>
                    <th>Project End Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employee as $item)
           <tr>
                <td>{{$item['proj_id']}}</td>
                <td>{{$item['proj_name']}}</td>
                <td>{{$item['proj_desc']}}</td>
                <td>{{$item['proj_st_date']}}</td>
                <td>{{$item['proj_end_date']}}</td>

           </tr>
            @endforeach
               
            </tbody>
        </table>