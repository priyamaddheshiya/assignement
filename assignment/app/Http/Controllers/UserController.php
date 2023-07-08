<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function create(Request $request){
    $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=> 'required',
            'security_question' => 'required',
            'your_answer'=> 'required',
            'gender'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'confirm_password'=> 'required',
        ]);

           $employee = new RegisterModel();
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->mobile_no = $request->mobile_no;  
        $employee->address = $request->address;
        $employee->age = $request->age;
        $employee->joining_date = $request->joining_date;
        $employee->leave_date = $request->leave_date;
        $employee->relieving_date = $request->relieving_date;
        $employee->save();
       return redirect()->route('employee.index')->with('success', 'Employee Created Successfully!.');
       
}
}