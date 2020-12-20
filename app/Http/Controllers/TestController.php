<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function user()
    {
        $users = [
            'user1' => 'prateeek',
            'user2' => 'pavit',
            'user3' => 'gilgamesh'
        ];
        return view('user', compact('users'));
    }
}
