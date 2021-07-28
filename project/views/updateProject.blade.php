<h1>Update Project</h1>
<form action="info" method="POST">
  @csrf
    <label>Project Name</label>
  <input type="text" name="proj_name" >
  <lable>Project Desc</lable>
  <input type="text" name="proj_desc"><br><br>
  <lable>project start Date</lable>

  <input type="Date" name="proj_st_date"><br><br>
  <lable>project End date</lable>

  <input type="Date" name="proj_end_date"><br><br>
  
  <button type="submit">Update </button>
</form>


