<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Auth;

class TestController extends Controller
{
    public function index(Request $request)
    {

        $count = $request->query('c');
//        session()->forget('resp');
//        session()->forget('timer');
        $carbon = new Carbon();
        $startTimer =  $carbon;
        if (!session()->has('timer.start')) {
            session()->put('timer.start', $startTimer);
        }

        $x = mt_rand('1', '10');
        $y = mt_rand('1', '10');
        $z = $x * $y;
        $mult[] = $z;
        $mult[] = abs($z - mt_rand(1, 4));
        $mult[] = $z + mt_rand(1, 4);
        $mult[] = abs($z - mt_rand(1, 4));
        $mult[] = $z + mt_rand(1, 4);
        shuffle($mult);
        $mult = array_unique($mult);

        $resp = session()->get('resp', 0);

        if (session()->has('resp.count')) {
            $param = session()->get('resp.count');
            session()->put('resp.count', $param + 1);
            if (($param + 1) >= $count) {
                return redirect()->route('report-mult');
            }
        } else {
            session()->put('resp.count', 0);
        }

        return view('site.test.multiplication.multiplication', compact('x', 'y', 'mult', 'resp'));
    }

    public function store(Request $request)
    {
        $x = $request->input('x');
        $y = $request->input('y');

        if (($x * $y) != $request->input('userrequest')) {

            if (session()->has('resp.error')) {
                $param = session()->get('resp.error');
                session()->put('resp.error', $param + 1);
            } else {
                session()->put('resp.error', 1);
            }

            return back()->with('error', 'НЕ ВЕРНО');
        } else {

            if (session()->has('resp.success')) {
                $param = session()->get('resp.success');
                session()->put('resp.success', $param + 1);
            } else {
                session()->put('resp.success', 1);
            }

            return back()->with('message', 'ВЕРНО');
        }

    }

    public function report()
    {
        $user_id = Auth::id();

        $start = session()->get('timer.start');

        $endTimer =  new Carbon();
        session()->put('timer.end', $endTimer);
        $end = session()->get('timer.end');

        $dif = $start->diffInSeconds($end);

        $count = session()->get('resp.count');
        $success = session()->get('resp.success');
        $error = session()->get('resp.error');
        session()->forget('resp');
        session()->forget('timer');

        $user = User::find($user_id);
        $user->tests()->create([
            'name'     => 'Таблица умножения',
            'examples' => $count ?? "0",
            'correct'  => $success ?? "0",
            'fail'     => $error ?? "0",
            'start'    => $start ?? "0",
            'finish'   => $end ?? "0",
            'diff'     => $dif ?? "0",
        ]);

        return view('site.test.multiplication.report',
            compact('count',
                          'success',
                             'error',
                             'start',
                             'end',
                             'dif'));
    }

    public function tablica()
    {
        return view('site.test.multiplication.tablica');
    }
}
