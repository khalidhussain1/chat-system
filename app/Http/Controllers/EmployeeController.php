<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentRequest;

class EmployeeController extends Controller
{
    public function payment_request(Request $request){
        $data=new PaymentRequest();
        $data->employee_id=$request->employee_id;
        $data->amount=$request->amount;
        $data->hours=$request->hours;  
        $data->rate=$request->rate;   
        $data->status=$request->status;
        $data->method=$request->method;
        $data->position=$request->position;
        $data->shift=$request->shift;
        $data->save();
        return redirect()->back()->with('success', 'Payment Request has been Submitted  ');

    }

    public function payment_status(){
        $data=PaymentRequest::where('employee_id',Auth()->user()->id)->get();
        
        return view('Employee.status',compact('data'));
    }   
}
