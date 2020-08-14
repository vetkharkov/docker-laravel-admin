<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class UserController extends SiteController
{
    public function profile()
    {
        return view('site.user.profile', array('user' => Auth::user()));
    }

    public function avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            $imgWidth = config('mysettings.users_img.width');
            $imgHeight = config('mysettings.users_img.height');
            $path = public_path('/uploads/avatars/'.$filename);

            Image::make($avatar)->resize($imgWidth, $imgHeight)->save($path);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('site.user.profile', array('user' => Auth::user()));
    }

    public function tt()
    {
//        $user = User::find(1);
//        $tests = $user->tests;
////        dd($user);
////        dd($tests);
//        foreach ($tests as $flight) {
//            echo $flight->name.'<br>';
//        }
        dd(Auth::user()->isAdministrator());

        $users = User::has('tests')->get();
        foreach ($users as $user) {
            echo $user->name.'<br>';
        }

    }

    public function xxx(Request $request)
    {
//        dd($request);
        $id = $request->userId;

//        dd($id);

        Auth::loginUsingId($id);

        return redirect()->back();
    }

    public function stat()
    {
        $user = Auth::user();
        $testSuccess = 0;
        $testFail = 0;
        $item = [];

        $result = DB::table('test_user')
            ->select('test_id')
            ->where('user_id', '=', $user->id)
            ->get()->toArray();

        foreach ($result as $key =>$value){
            $item[] = $value->test_id;
        }

        $test = DB::table('tests')
            ->select('examples', 'correct', 'fail')
            ->where('examples', 10)
            ->whereIn('id', $item)
            ->get();

        foreach ($test as $key=>$item) {
            $testSuccess += $item->correct;
            $testFail += $item->fail;
        }


        return view('site.user.statistic', compact('user', 'testSuccess', 'testFail'));
    }

}
