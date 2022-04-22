<?php

use App\Models\ProjectDetail;
use App\Models\ProjectMedia;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
// ================================ New Accounts ===================================
function new_accounts()
{
    $data = User::all()->count();
    return $data;
}
// ================================ All Clinets ===================================
function clients()
{
    $data = User::where('role', 'client')->get();
    return $data;
}

// ================================ All Designer ===================================
function designer()
{
    $data = User::where('role', 'designer')->get();
    return $data;
}

// ================================ Media  ===================================

function media($id)
{
    $data = ProjectMedia::where('id', $id)->get();
    $images = ($data->image);
    dd($images);
    // dd($images);
    // dd($data);
}


// ================================ Messageable users    ===================================

function users()
{
    $data = User::get();
    return $data;
}

// ================================ Projects     ===================================

function projects()
{
    $data = ProjectDetail::get();
    return $data;
}
// ================================ Projects   counts    ===================================

function projects_counts()
{
    $data = ProjectDetail::get();
    return count($data);
}


function designer_projects($id)
{
    
    $data = Project::where('designer_id',$id)->get();
    return count($data);
}

function client_projects($id)
{
    
    $data = Project::where('client_id',$id)->get();
    return count($data);
}
       // ================================ Sent mEssages   ===================================
   
    //    function messages($from , $to){
    
    //       $sent=DB::table('ch_messages')
    //       ->where('from_id',$from)
    //       ->where('to_id', $to)->get();
    //       $recived=DB::table('ch_messages')
    //       ->where('to_id',$to)
    //       ->where('from_id', $from)->get();
           
      
    // }
