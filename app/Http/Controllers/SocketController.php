<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis as LRedis;

class SocketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('socket.index');
    }

    public function writeMessage()
    {
        return view('socket.write');
    }

    public function sendMessage()
    {
        $redis = LRedis::connection();
        $redis->publish('message', Input::get('message'));
        return redirect('writemessage');
    }

}
