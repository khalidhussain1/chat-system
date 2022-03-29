<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function update_information(Request $request)
    {

        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // if ($request->hasFile('image')) {

        //     $file = $request->file('image');
        //     $extension = $request->image->extension();
        //     $fileName = time() . "_." . $extension;
        //     $request->image->move('upload/images/', $fileName);
        //     $user->profile = $fileName;
        // }
        
        $user->save();
        return back()->with('success', 'Profile Information Updated Successfully.');
    }

    public function change_password(Request $request)
    {
        $user = User::find($request->admin_id);
        if (!Hash::check($request->Current_Password, $user->password)) {
            return back()->with('error', 'Current Password does not match!');
        }
        else{
           
            $validated = $request->validate([
                'New_Password' => 'required|min:6',
                'Confirm_Password'=>'required|same:New_Password'
                ]);
            
            $users = User::find($request->admin_id);
            $users->password = Hash::make($request->New_Password);
            $users->save();
            return back()->with('success', 'Password successfully changed!');
        }
    }
}
