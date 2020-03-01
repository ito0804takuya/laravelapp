<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\HelloRequest;

class HelloController extends Controller
{
    public function index(Request $request) {
        return view('hello.index');
    }

    public function post(HelloRequest $request) {
        return view('hello.index', $data);
    }
}
