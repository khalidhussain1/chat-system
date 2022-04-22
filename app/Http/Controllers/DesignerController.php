<?php

namespace App\Http\Controllers;

use App\Models\ProjectMedia;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class DesignerController extends Controller
{
    
    function designers()
    {
    
        $data = Project::where('client_id',Auth()->user()->id)->get();
   
        return view('Client.designers', compact('data'));
    }
    
    public function designer_projects(){
        
        $data=Project::where('designer_id',Auth()->user()->id)->get();
       
        // dd($data);
        // $media=ProjectMedia
        return view('Designer.assigned-projects',compact('data'));

    }
   
}
