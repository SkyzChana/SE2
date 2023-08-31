<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserroleController extends Controller
{
    //
    function index(){
        $roles = [
            ['type' => 'อาจารย์','name' => ['Jakkrit']],
            ['type' => 'ทีเอ','name' => ['Ohm','Friend',]],
            ['type' => 'นักเรียน','name' => ['Sky']]
        ];
        $test = "TEST!!";
        return view('roles',compact('roles','test'));
    }
}
