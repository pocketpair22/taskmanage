<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        
        $data = [
            'msg'=>'indexdesu',
        ];
        die("exit");
        return view('users.index', $data);
    }

    public function add() {

    }

    public function edit() {

    }

    public function delete() [

    ]
}
