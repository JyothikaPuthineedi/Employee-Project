@extends('layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
      <h3 class="navbar-brand">MindTree</h3>
      <a href={{"/login"}}><button class="btn btn-secondary my-2 my-sm-0">Logout</button></a>
    
    </div>
</nav>
<br>
<div class="container">
<h4 class=" bg-info text-center" >Your details (manager) </h4>
<div class="table-responsive"> 
<table class="table align-middle table-hover">
    <tr>
      <td scope="col">Id</td>
      <td scope="col">Firstname</td>
      <td scope="col">Lastname</td>
      <td scope="col">Mobile</td>
      <td scope="col">DOB</td>
      <td scope="col">gender</td>
      <td scope="col">Address</td>
      <td scope="col">City</td>
      <td scope="col">User Type</td>
      <td scope="col">UserName</td>
      <td scope="col">password</td>
      <td scope="col">Operation</td>
    </tr>
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
        <a href={{"editMobile/".$emp->emp_id}}>Edit number</a>
      </td>
    </tr>
   @endforeach
</table>
</div>

</div>
<div class="container">
<h4 class=" bg-info text-center">Employee Reported to You are </h4>
<div class="table-responsive">
<table class="table align-middle table-hover">
    <tr>
      <td scope="col">emp_id</td>
      <td scope="col">emp_firstname</td>
      <td scope="col">emp_lastname</td>
      <td scope="col">mobile_num</td>
     
      <td scope="col">gender</td>
      <td scope="col">comm_address</td>
      <td scope="col">city</td>
     
     
      <td scope="col">Operation</td>
    </tr>

    @foreach ($reported as $rep)
    <tr class="table-active">
      <td>{{$rep->emp_id}}</td>
      <td>{{$rep->emp_firstname}}</td>
      <td>{{$rep->emp_lastname}}</td>
      <td>{{$rep->mobile_num}}</td>
      
      <td>{{$rep->gender}}</td>
      <td>{{$rep->comm_address}}</td>
      <td>{{$rep->city}}</td>
      
      <td>
        <a href={{"deleteRepotee/".$rep->emp_id."/".$emp->emp_id}}>Remove This Employee</a>
      </td>
      </tr>
   @endforeach
</table>
</div>

</div>


<br><br><br>





<div class="container features">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Add Employee</h3>
                   
                    <p>To add New employee to project click on "Add"! </p>
                    <a href={{"/addEmployee/".$emp->emp_id}} class="btn btn-success"> Add </a>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Issues</h3>
                    
                    <p>Look into the issues raised by other employees. </p>
                    <a href={{"/displayIssue/".$emp->emp_id}} class="btn btn-success"> Issues </a>
                </div>
                
                
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Raise a issue!</h3>
                    <form action="/create" method="POST">
                        @csrf
                         <div class="form-group">
                              <lable>Employee ID :</lable>
                              <input type="text" name="emp_id" value = "{{$emp->emp_id}}" class="form-control " disabled>
                         </div>
 
                         <div class="form-group">
                             <lable>Issue Type :</lable>
                             <input type="text" name="issue_type" class="form-control " placeholder="Enter issue type">
                         </div>

                         <div class="form-group">
                            <lable>Issue Description :</lable>
                             <input type="text" name="issue_desc" class="form-control "placeholder="Enter issue description"><br>
                         </div>
  
  
                         <button type="submit" class="btn btn-success">Submit issue </button><br>
                     </form>
                    
                </div>
            </div>
        </div>

@stop

