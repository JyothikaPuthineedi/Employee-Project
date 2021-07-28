<h1>Update mobile and address</h1>
<form action="/editMobile" method="POST">
  @csrf

  <input type="hidden" name="emp_id" value="{{$emp}}" >
  <lable>New mobile number :</lable>
  <input type="text" name="mobile_num"  placeholder="Enter New Mobile Number" ><br><br>
  <lable>New communication address :</lable>

  <input type="text" name="comm_address"   placeholder="Enter New address"><br><br>
  <lable>New city :</lable>

  <input type="text" name="city" placeholder="Enter New city"><br><br>
  <button type="submit">Update </button>
</form>


