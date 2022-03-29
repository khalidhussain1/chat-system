<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DesignerController extends Controller
{
    
    function designers()
    {
    
        $data = User::where('role','designer')->get();
        return view('Client.designers', compact('data'));
    }

   
}
