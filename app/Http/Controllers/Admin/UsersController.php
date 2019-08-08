<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Image;


use App\Models\User;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        echo __METHOD__;

        $users = User::all();
        $count = $users->count();
        $countActive = 0;

        foreach($users as $key => $user){
            if($user->isOnline()) {
                $countActive = $countActive + 1;
            };
        }
        $users = DB::table('users')->paginate(config('mysettings.admin_paginate.user'));
//        dd($users);
//
//dd($users);
//dd(Auth::user()->image);
//dd(asset(public_path() . '/' . config('mysettings.theme') . '/images/avatar/' . Auth::user()->image));
//        dd($users->count());

//        Storage::disk('loc    al')->put('file777.txt', 'Contents');

        return view('admin.user-management.index', compact('users', 'count', 'countActive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::find($id);

        return view('admin.user-management.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if ($user == null) {
            return redirect()->back();
        }

        return view('admin.user-management.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = [
            'login'       => $request['login'],
            'name'        => $request['name'],
            'email'       => $request['email'],
            'old_images'  => $request['old_images'],
            'password'    => $request['password'],

        ];
//dd($user->password);
        //Upload Image

        if ($request->hasFile('avatar')) {
            //
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(config('mysettings.users_img.width'), config('mysettings.users_img.height'))->save(public_path('/uploads/avatars/' . $filename));
            $input['avatar'] = $filename;

        }
        else {
            $input['avatar'] = $input['old_images'];
        }

        unset($input['old_images']);

        //Upload Image

        //Password

        if(isset($input['password']) && $input['password'] != $user->password) {
            $input['password'] = bcrypt($input['password']);
        }

        //Password

//        dd($input);

        User::where('id', '=', $id)->update($input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }

}
