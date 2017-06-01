<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\LoginAdminRequest;
class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("adminRegister");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdminRequest $request)
    {
        $admin=new Admin;
        
        $admin->first_name=$request->first_name;
        $admin->last_name=$request->last_name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->save();    
        
        
        return redirect()->action('AdminAccountController@index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function login(LoginAdminRequest $request)
    {
        
        $admin=Admin::where('email',$request->email)->where('password',$request->password)->first();
        if($admin!=null)
        {
            
            session(['email'=>$request->email]);
            return redirect('admin/places');
        }
        else
        {
            session()->flash('admin_login_error','Wrong Email or Password');
            return redirect('admin/login');
        }
    }
}
