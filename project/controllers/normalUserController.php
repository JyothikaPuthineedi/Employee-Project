<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NormalUser;
use App\Models\updateMobile;
class normalUserController extends Controller
{
    function getNormalUser($emp_id){
      // $data = DB::select("select * from employee where user_name = 'imadam' ");
      $data = DB::table('employee')
      ->where('emp_id',$emp_id)
      ->get();
        return view('normalUser',['employee'=>$data]);
     
    }
    
    function addIssue(Request $req){
      
      $normaluser = new NormalUser;
      $normaluser->emp_id=$req->emp_id;
      $normaluser->issue_type=$req->issue_type;
      $normaluser->issue_desc=$req->issue_desc;
      $normaluser->issue_status="queued";
      $normaluser->save();
      
      return redirect('normal/'.$req->emp_id);
     // return redirect('normal/'.$req->emp_id);
    }

    function UpdateMobile($emp_id){
      
          $data = DB::table('employee')
        ->where('emp_id',$emp_id)
        ->get();  
        /*
        return  DB::table('employee')
        ->where('emp_id',$emp_id)
        ->get();*/
        //$id = $data->emp_id;
        return view('editMobile',['emp'=>$emp_id]);

      // return view('editMobile',['emp'=>$data['emp_id']]);
    }

    function update(Request $req){
      $data = DB::table('employee')
      ->where('emp_id',$req->emp_id)
      ->get();
     // $data1 = $data->user_name;

/*
      $updateMobile = new updateMobile;
      $updateMobile->mobile_num=$req->mobile_num;
      $updateMobile->comm_address=$req->comm_address;
      $updateMobile->city=$req->city;

      $updateMobile->save();*/

     
      //$data->emp_id=$req->emp_id;
      /*
      $data->mobile_num=$req->mobile_num;
      $data->comm_address=$req->comm_address;
      $data->city=$req->city;
      
      $data->save();
*/
      //DB::table('employee')->update($updateMobile);

      DB::table('employee')
      ->where('emp_id',$req->emp_id)
      ->update(
        ['mobile_num'=>$req->mobile_num,
        'comm_address'=>$req->comm_address,
        'city'=>$req->city
        ]
      );

      return redirect('normal/'.$req->emp_id);

    }
}
