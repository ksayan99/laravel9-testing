<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
// use Carbon\Carbon; // direct usage by '/'
use App\Http\Requests\Validator;
use Illuminate\Support\Facades\App;

class EmployeeCRUD extends Controller
{
    public function index()
    {
        request('lang') ? App::setlocale(request('lang')) : null;
        $response = Employee::orderBy('created_at','desc')->get();
        return view('register',['data' => $response]);
    }

    public function create(Validator $data)
    {
        $data->rules();
        Employee::create([
            'email' => $data->email,
            'name' => $data->name,
            'mobile' => $data->mobile,
            'password' => md5($data->password),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        return redirect(route('create'))->with('status','Registration Successful !!');
    }
    
    // OPTIONAL FUNCTION STARTING
    public function store(Request $request)
    {
        DB::table('employees')->insert([
            'email' => 'sayan@gmail.com',
            'name' => 'sayan karmakar',
            'mobile' => 9876543210,
            'password' => md5(123456),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }

    public function show()
    {
        return Employee::all();
    } // OPTIONAL FUNCTION ENDING

    public function edit($uid)
    {
        $response = Employee::find($uid);
        return view('modify',['data' => $response]);
    }

    public function update(Request $data, $uid)
    {
        Employee::find($uid)->first()->update([
            'email' => $data->email,
            'name' => $data->name,
            'mobile' => $data->mobile,
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        return redirect(route('create'))->with('status','Updation Successful !!');
    }

    public function destroy($uid)
    {
        Employee::find($uid)->delete();
        return redirect(route('create'))->with('status','Successfully Deleted !!');
    }
}
