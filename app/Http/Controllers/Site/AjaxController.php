<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Auth;

class AjaxController extends Controller
{
    public function index(Request $request)
    {
        $count = $request->c;

//        $carbon = new Carbon();
//        $carbon->format('H:i:s');
//        $startTimer =  $carbon;
        $startTimer = Carbon::now()->format('H:i:s');

        $correct = 0;
        $fail = 0;

        $x = mt_rand('1', '10');
        $y = mt_rand('1', '10');

        $mult = $this->mult($x, $y);

        return view('site.test.ajax-multiplication.multiplication',
            compact('x','y', 'mult', 'count', 'correct', 'fail', 'startTimer'));
    }

    public function store(Request $request)
    {
        $startTimer = Carbon::parse($request->startTimer);

        $timerFinish = Carbon::now()->format('H:i:s');

        $timer = $startTimer->diffInSeconds($timerFinish);

        $count = $request->count;

        $correct = $request->correct;
        $fail = $request->fail;


        $x = $request->x;
        $y = $request->y;
        $mul = $x * $y;
        $msg = "";

        $userrequest = $request->userrequest;

        if($mul == $userrequest) {
            $msg = 'ПРАВИЛЬНО';
            $correct += 1;
        } else {
            $msg = 'НЕ ВЕРНО';
            $fail +=1;
        }

        $count = $count - 1;

        $x = mt_rand('1', '10');
        $y = mt_rand('1', '10');

        $mult = $this->mult($x, $y);

        $data = [
            'msg'            => $msg,
            'count'          => $count,
            'correct'        => $correct,
            'fail'           => $fail,
            'x'              => $x,
            'y'              => $y,
            'mult'           => $mult,
            'timerFinish'    => $timerFinish,
            'timer'          => $timer,
        ];

        return response()->json($data, 200);
    }

    public function report(Request $request)
    {
        $user_id = Auth::id();

        $timerStart = $request->timerStart;
        $timerFinish = $request->timerFinish;

        $diff = $request->timer;

        $correct =  $request->correct;
        $fail = $request->fail;
        $examples = $correct + $fail;

        $data = [
            'correct' => $request->correct,
            'fail'    => $request->fail,
            'timer'   => $request->timer,

        ];

        /*
         * Запись в БД
         */
        $user = User::find($user_id);
        $user->tests()->create([
            'name'     => 'Таблица умножения-' . $examples,
            'examples' => $examples ?? "0",
            'correct'  => $correct ?? "0",
            'fail'     => $fail ?? "0",
            'start'    => $timerStart ?? "0",
            'finish'   => $timerFinish ?? "0",
            'diff'     => $diff ?? "0",
        ]);


        return response()->json($data, 200);
    }

    public function mult($x, $y)
    {

        $z = $x * $y;
        $mult[] = $z;
        $mult[] = abs($z - mt_rand(1, 4));
        $mult[] = $z + mt_rand(1, 4);
        $mult[] = abs($z - mt_rand(1, 4));
        $mult[] = $z + mt_rand(1, 4);
        shuffle($mult);

//        $mult = array_unique($mult, SORT_NUMERIC);

        if(count($mult) < 5) {
            $mult = $this->mult($x, $y);
        }

        return $mult;
    }


}
