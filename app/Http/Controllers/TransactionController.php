<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class TransactionController extends Controller
{
    public function index(){
        $trans = Transactions::all();
        // return $types;
        return view('mtransaction', compact('trans'));
    }

    public function store(){
        return view('Mtransaction');
    }
}
