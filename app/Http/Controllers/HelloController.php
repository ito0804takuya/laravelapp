<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id ='zero') {
        $data = [ 'msg' => 'hey', 'id' => $id];
        return view('hello.index', $data);
    }
}
