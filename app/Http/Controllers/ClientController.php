<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    
 public function projects(){
    //  dd(Auth()->user()->email);
    $data = Project::where('client_id',Auth()->user()->id)->get();
    $data1=ProjectDetail::where('email',Auth()->user()->email)->get();
    // dd($data1)
    // $data = DB::select('SELECT * from project where');
     return view('Client.projects',compact('data','data1'));
 }
}
