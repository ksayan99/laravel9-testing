<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = DB::table('employees')->orderBy('created_at','desc')->get();
        return view('home',['data' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        DB::table('employees')->insert([
            'email' => $data->email,
            'name' => $data->name,
            'mobile' => $data->mobile,
            'password' => md5($data->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect(route('home'))->with('status','Registration Successful !!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = DB::table('employees')->where('uid',$id)->get();
        return view('modify',['data' => $response]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        DB::table('employees')->where('uid',$id)->update([
            'email' => $data->email,
            'name' => $data->name,
            'mobile' => $data->mobile,
            'updated_at' => Carbon::now(),
        ]);
        return redirect(route('home'))->with('status','Updation Successful !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('employees')->where('uid',$id)->delete();
        return redirect(route('home'))->with('status','Successfully Deleted !!');
    }
}
