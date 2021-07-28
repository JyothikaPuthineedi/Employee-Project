@extends('layout')
@section('content')
<link rel="stylesheet" href="css/main.css" >
<h1> Your details </h1>
<div>
<table class="table align-middle" border="1">
  <thead class="thead-dark">
    <tr>
      <td scope="col">emp_id</td>
      <td scope="col">emp_firstname</td>
      <td scope="col">emp_lastname</td>
      <td scope="col">mobile_num</td>
      <td scope="col">date_of_birth</td>
      <td scope="col">gender</td>
      <td scope="col">comm_address</td>
      <td scope="col">city</td>
      <td scope="col">user_type</td>
      <td scope="col">user_name</td>
      <td scope="col">user_password</td>
      <td scope="col">Operation</td>

    </tr>
</thead>
   
    @foreach ($employee as $emp)
    <tr>
      <td>{{$emp->emp_id}}</td>
      <td>{{$emp->emp_firstname}}</td>
      <td>{{$emp->emp_lastname}}</td>
      <td>{{$emp->mobile_num}}</td>
      <td>{{$emp->date_of_birth}}</td>
      <td>{{$emp->gender}}</td>
      <td>{{$emp->comm_address}}</td>
      <td>{{$emp->city}}</td>
      <td>{{$emp->user_type}}</td>
      <td>{{$emp->userName}}</td>
      <td>{{$emp->user_password}}</td>
      <td>
        <a href={{"editMobile/".$emp->emp_id}} class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edit </a>
      </td>
    </tr>
   @endforeach
   
    
</table>
</div>

<h3>Raise a issue </h3>
<div  id="d2">
<form action="/create" method="POST">
   @csrf
  <div class="form-group">
  <lable>Employee ID :</lable>
  <input type="text" name="emp_id" ><br><br>
  </div>
 
  <div class="form-group">
  <lable>Issue Type :</lable>
  <input type="text" name="issue_type" placeholder="Enter issue type"><br><br> 
  </div>

  <div class="form-group">
  <lable>Issue Description :</lable>
  <input type="text" name="issue_desc" placeholder="Enter issue description"><br><br>
  </div>
  
  
  <button type="submit">Submit issue </button>
</form>

</div>
@stop

