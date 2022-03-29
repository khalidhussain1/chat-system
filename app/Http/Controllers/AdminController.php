<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function  create_user(Request $request){
      $data=new User();
      $data->name=$request->firstname;
      $data->email=$request->email;
      $data->password=Hash::make($request->passowrd);
      $data->role=$request->role;
      $data->save();
      return redirect()->back()->with('success','User Has been addedd successfully');
    }

    function users()
    {
    
        $data = User::get();
   
        return view('admin.users', compact('data'));
    }
    function update_user(Request $req)
    {
      

        $validated = $req->validate([

            'email' => 'email|unique:users,email,' . $req->id

        ]);
        $data = User::find($req->id);
        $data->name = $req->name;

        $data->email = $req->email;
        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    function delete($id)
    {


        $data = User::find($id);

        $data->delete();
        return back()->with('success', 'User Delete Successfully');
    }

    public function user_details($id){
        $data = User::find($id);
        dd($data->name);
      
    }

    // public function logout(){
    //     Auth::logout();
    //     return redirect()->route('login');

    // }
}
