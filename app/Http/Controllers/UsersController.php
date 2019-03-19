<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request) {
        if ($request) {
            $user_data = $request::all();
        } else {
            $user_data = "none"
        }
        
        return view('users.login', compact('user_data'));
    }

    public function add() {

    }

    public function edit() {

    }

    public function delete() {

    }
}
