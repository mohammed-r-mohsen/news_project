<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ControlPanel.Home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ControlPanel.add-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $admin = new Admin();
        $admin->username = $request->input('username', 'requestname');
        $admin->email = $request->input('email', 'request@example.com');
        $admin->password = Hash::make($request->input('password', 'admin'));

        $admin->save();

        return $this->ShowAll();

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
        $admin = Admin::find($id);
        return view('ControlPanel.update-admin')->with('admin' , $admin);
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
        $admin = Admin::find($id);
        $admin->username = $request->input('username', 'requestname');
        $admin->email = $request->input('email', 'request@example.com');
        $admin->password = Hash::make($request->input('password', 'admin'));
        $admin->save();

        return $this->ShowAll();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);

        return $this->ShowAll();
    }

   public function ShowAll()
   {
    $admins = Admin::all();
     return view('ControlPanel.admin-list')->with('admins' , $admins);
   }

}
