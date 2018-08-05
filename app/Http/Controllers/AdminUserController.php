<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.students.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|max:100|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        Session::flash('success', 'The User was successfuly added!');

        //Redirect to another page
		return redirect()->route('adminusers.create');
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
        $user = User::findOrFail($id);
        return view('admin.students.edit')->withUser($user);
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
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'sometimes|max:100',
            'password' => 'sometimes|min:6',
        ]);

        $user = User::findOrFail($id);
        if ($request->has('name'))
        {
            $user->name = $request->name;
        }
        if ($request->has('email'))
        {
            $user->email = $request->email;
        }
        
        if ($request->has('password'))
        {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        Session::flash('success', 'The User was successfuly Updated!');

        //Redirect to another page
		return redirect()->route('adminusers.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        
        Session::flash('success', 'The User was successfuly Deleted!');

        //Redirect to another page
		return redirect()->route('adminusers.index');
    }
}
