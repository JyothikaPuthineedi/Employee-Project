<h3>Project Info</h3>
<form class="form-horizontal" action="p" method="POST">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   @if(Session::has('success'))
    <div class="alert alert-success"><strong>{{Session::get('success')}}</strong></div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger"><strong>{{Session::get('fail')}}</strong></div>
    @endif
    @csrf
    <div class="form-group">
       <label  class="control-label col-sm-5">Project Id</label>
       <div class="col-sm-6">
       <input type="number" name="proj_id" placeholder="enter id for project"><br><br>
       <span style="color:red">@error('proj_id'){{$message}}@enderror</span>
    </div>
    </div>
       
       <div class="form-group">
       <label  class="control-label col-sm-5">Project Name</label>
       <div class="col-sm-6">
       <input type="text" name="proj_name" placeholder="enter name for project"><br><br>
       <span style="color:red">@error('proj_name'){{$message}}@enderror</span>
    </div>
    </div>

       <div class="form-group">
       <label  class="control-label col-sm-5">Proj Desc</label>
       <div class="col-sm-6">
       <input type="text" name="proj_desc" placeholder="description of project"><br><br>
       <span style="color:red">@error('proj_desc'){{$message}}@enderror</span>
    </div>
    </div>

       <div class="form-group">
       <label  class="control-label col-sm-5">Project Start Date</label>
       <div class="col-sm-6">
       <input type="Date" name="proj_startdate" placeholder="enter start date"><br><br>
       <span style="color:red">@error('proj_startdate'){{$message}}@enderror</span>
    </div>
    </div>

       <div class="form-group">
       <label  class="control-label col-sm-5">Project End Date</label>
       <div class="col-sm-6">
       <input type="Date" name="proj_enddate" placeholder="enter End date"><br><br>
       <span style="color:red">@error('proj_enddate'){{$message}}@enderror</span>
    </div>
    </div>

    <div class="container bg-light">
    <div class="col-md-12 text-center">
    <button type="submit" class="btn-success" name="submit">Submit</button>

    </div>
    </div>
    