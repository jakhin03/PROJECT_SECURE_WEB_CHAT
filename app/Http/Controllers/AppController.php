<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Chatroom;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index () {
        $data = ['user' => Auth::user(), 'rooms' => Chatroom::all()];
        return view('app', ['data' => $data]);
    }
}
