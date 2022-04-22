<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectMedia;


class ManagerController extends Controller
{
  public function assigning_projects(Request $request)
  {
  
    // $media = new ProjectMedia();
    $data = new Project();
    $data->project_id = $request->project_id;
    $data->assignedby_id = $request->assign_by;
    $data->client_id = $request->client;
    $data->designer_id = $request->designer;
    $data->save();
    return redirect()->back()->with('success', 'Project has been assigned to the designer ');
  }
}
