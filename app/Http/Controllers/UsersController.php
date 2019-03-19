<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $req) {
        if ($req->has('name')) {
            $name = $req->name;
        } else {
            $name = "";
        }

        if ($req->has('password')) {
            $password = $req->password;
        } else {
            $password = "";
        }
        
        return view('users.login', compact('name', 'password'));
    }

    public function add() {

    }

    public function edit() {

    }

    public function delete() {

    }
}
