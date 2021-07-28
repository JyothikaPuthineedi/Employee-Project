<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Http\Request;
use App\models\employee;
use App\Models\project;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function registerEmployee()
       {
           //  $data = DB::table('employee')->select('emp_id','userName')->get();
           
           $reg = employee::all();
           if($reg==" "){
            return back()->with('fail','No Registered Employees!!!');
           }
           else{
           
            return view('employeregister',['employee'=>$reg]);
           }
       }
       public function addProject(Request $req)
       {
        $pro = new Project();
        $pro->proj_name = $req->proj_name;
        $pro->proj_desc = $req->proj_desc;
        $pro->proj_startdate = $req->proj_startdate;
        $pro->proj_enddate = $req->proj_enddate;
        $result = $pro->save();
        if($result){
            return back()->with('sucess','Project data added succesfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
       }

       public function regEmployeeInfo($id)
       {
          // $employee = employee::all();
           $data = employee::where('emp_id',$id)->get();
           return view('Admin',['employee'=>$data]);
       }

       public function deleteEmpData($id) 
       {
        $employee= employee::where('emp_id',$id);
        $employee->delete();
        return redirect('reg');
       }
    /*function showData($emp_id)
    {
        $result= DB::table('employee')
        ->where('userName',$userName)
        ->update([
          'emp_firstname'=>$emp_firstname,
          'emp_lastname'=>$emp_lastname,
          'mobile_num'=>$mobile_num,
          'date_of_birth'=>$date_of_birth,
          'gender'=>$gender,
          'comm_address'=>$comm_address,
          'city'=>$city]);
    }*/
    public function getproject()
       {
           //  $data = DB::table('employee')->select('emp_id','userName')->get();
           $project = project::all();
            return view('searchproject',['empproject'=>$project]);
       }
       public function getProjectDetails($id)
       {
           $emp_pro = DB::table('employee')
           ->join('emp_proj','emp_proj.proj_manager','=','employee.emp_id')
           ->join('project','project.proj_id','=','emp_proj.proj_id')
           ->select('employee.*')
           ->where('emp_proj.proj_id','=',$id)
           ->get();
           return view('getprojectinfo',['getprojectdetails'=>$emp_pro]);
       }
       function updateEmployee(Request $req){
        $emp_id = $req->emp_id;
        $emp_first_name = $req->emp_first_name;
        $emp_last_name = $req->emp_last_name;
        $emp_mobile_no = $req->emp_mobile_no;
        $emp_dob = $req->emp_dob;
        $emp_gender = $req->emp_gender;
        $emp_comm_address = $req->emp_comm_address;
        $emp_city = $req->emp_city;
        $emp_type = $req->emp_type;
        $emp_password = $req->emp_password;
        DB::update('update employee set emp_first_name=?,emp_last_name=?,emp_mobile_no=?,emp_dob=?,emp_gender=?,emp_comm_address=?,emp_city=?,emp_type=?,emp_password=? where emp_id=?',[$emp_first_name,$emp_last_name,$emp_mobile_no,$emp_dob,$emp_gender,$emp_comm_address,$emp_city,$emp_type,$emp_password,$emp_id]);        
        return redirect('employees_details');
    }
    function showData($emp_id){
        $data = Employee::where('emp_id',$emp_id)->first();
        return view('updateemployee',compact('data'));
    }
}

