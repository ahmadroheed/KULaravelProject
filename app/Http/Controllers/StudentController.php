<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use function Ramsey\Uuid\v1;

class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function save(Request $request)
    {
        $name = $request->input('name');
        $fname = $request->input('fname');
        $password = $request->input('password');
        $email = $request->input('email');

        // Query Builder 

        $result = DB::table('students')->insert(
            [
                'student_name' =>$name,
                'student_fname' =>$fname,	
                'password' =>$password,
                'email' =>$email,
                'created_at'=>now(),
                'updated_at' =>now()	
            ]
        );
        if($result)
        {
            Alert::success('Congrats', 'Saved Successfully');
        }
        else{
            Alert::error('Error','Some thing went wrong');
        }
        return back();
    }

    public function show(){
        $result = DB::table('students')->get();
        return view('show',['result'=>$result]);
    }
}
