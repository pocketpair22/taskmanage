<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request) {
        $user_data = $request::all();
        
        return view('users.login', compact('user_data'));
    }

    public function add() {

    }

    public function edit() {

    }

    public function delete() {

    }
}
