<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\ProjectMedia;
use App\Models\Update;
use App\Notifications\RegisteraccountlNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\PaymentRequest;

class AdminController extends Controller
{
    public function  create_user(Request $request)
    {
        // dd($request->password);
        $p=$request->password;
         User::create([
            'name' => $request->firstname,
            'email' => $request->email,
            'role'  => $request->role,
            'type'  => $request->type,
            'password' => Hash::make($p),
        ]);
        // $data = new User();
        // $data->name = $request->firstname;
        // $data->email = $request->email;
        // $data->password = Hash::make($request->passowrd);
        // $data->role = $request->role;
        // $data->type=$request->type;
        // $data->save();

        return redirect()->back()->with('success', 'User Has been addedd successfully');
    }

    function users()
    {

        $data = User::get();

        return view('Admin.users', compact('data'));
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

    public function user_details($id)
    {
        $data = User::find($id);
        return $data;
    
    }

    public function chat_visibility(Request $request)
    {

        $sent = DB::table('ch_messages')
            ->where('to_id', $request->from)
            ->where('from_id', $request->to)->get();
        $recived = DB::table('ch_messages')
            ->where('to_id', $request->to)
            ->where('from_id', $request->from)->get();

        return view('Admin.chat-visibility', compact('sent', 'recived'));

        // return view('Admin.chat-visibility')->with('success','No data Found ');

    }

    public function messages()
    {
        return view('Admin.chat-option');
    }

    public function project_detail(Request $request)
    {

        // dd($request);
        $data = new ProjectDetail();
  
        if ($request->hasFile('sample')) {

            $file = $request->file('sample');
            $extension = $request->sample->extension();
            $fileName = time() . "_." . $extension;
            $request->sample->move('upload/projectimages/', $fileName);
            $data->sample = $fileName;
        }

        if ($request->hasFile('color')) {

            $file2 = $request->file('color');
            $extension2 = $request->color->extension();
            $fileName2 = time() . "2_." . $extension2;
            $request->color->move('upload/projectimages/', $fileName2);
            $data->color = $fileName2;
        }

  $data->title = $request->title;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->industry = $request->industry;
        $data->intrested = "Paypal";
        if($request->title=="Logo Design")
        {
            $budget=300;
        }
        else
        {
            $budget=400; 
        }
        $data->budget = $budget;
        $data->date = $request->date;
        $data->recomendation    = $request->recomendation;
        $data->description = $request->description;
        $data->save();

        //Paypal integration page here 
        // return view('auth.register');
        return redirect('/payment');
    }

    public function reports(Request $request)
    {
       
        $data=new Update();
        $data->assign_by=$request->assign_by;
        $data->project_id=$request->project_id;
        $data->description=$request->description;
        $data->save();
        return redirect()->back()->with('success','Updated to Admin Successfully ');
      
    }

    public function updates(){
        $data=Update::get();
     return view('Admin.updates')->with('data',$data);
    }
public function payroll(){

    $data=Project::all();
    

    return view('Admin.payroll',compact('data'));
}

public function post_project(Request $request){

    return view('Admin.postproject');
}

public function post(Request $request ){

    $data = new ProjectDetail();
    if ($request->hasFile('sample')) {

        $file = $request->file('sample');
        $extension = $request->sample->extension();
        $fileName = time() . "_." . $extension;
        $request->sample->move('upload/projectimages/', $fileName);
        $data->sample = $fileName;
    }
    $data->title = $request->title;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->industry = $request->industry;
    $data->intrested = $request->intrested;
    $data->budget = $request->budget;
    $data->date = $request->date;
    $data->recomendation    = $request->recomendation;
    $data->description = $request->description;
    $data->save();
    
// $user=User::find(25);
$user=ProjectDetail::latest()->first();



    // $user->notify(new RegisteraccountlNotification($user));
    $details = [
        'title' => 'Sign up!',
        'body' => 'http://127.0.0.1:8000/register   
        
        '
    ];
   
    Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));

    return redirect()->back()->with('success','Project Posted Successfully ');
    
}

public function payment_status(){
    $data=PaymentRequest::where('employee_id',Auth()->user()->id)->get();
    // dd($data);
    return view('Admin.status',compact('data'));
}  

public function requests(){
    
    $data=PaymentRequest::where('status',0)->get();
    // dd($data);

    return view('Admin.requests',compact('data'));
}

public function statuschnage($id){
    $affected = DB::table('payment_requests')
              ->where('id', $id)
              ->update(['status' => 1]);
              $data=PaymentRequest::where('id',$id)->get();
         return redirect()->back()->with('success','Withdraw Approved Successfully ');
  
}
}
