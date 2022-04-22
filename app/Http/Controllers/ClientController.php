<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    
 public function projects(){
    $data = Project::where('client_id',Auth()->user()->id)->get();
    // $data = DB::select('SELECT * from project where');
     return view('Client.projects',compact('data'));
 }
}
