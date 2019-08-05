<?php

namespace App\Http\Controllers\Site;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class UserController extends SiteController
{
    public function profile()
    {
        return view('site.user.profile', array('user' => Auth::user() ));
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(config('mysettings.users_img.width'), config('mysettings.users_img.height'))->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('site.user.profile', array('user' => Auth::user()));
    }
}
