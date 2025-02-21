<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // return $types;
        return view('muser', compact('users'));
    }

    public function store(){
        return view('Muser');
    }
}
