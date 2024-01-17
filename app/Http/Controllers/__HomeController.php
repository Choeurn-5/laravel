<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs=[
            [
                'title'=>'hello',
                'body'=>'this is body one',
                'status'=>1
                
            ],
            [
                'title'=>'hello',
                'body'=>'this is body two',
                'status'=>1
            ],
            [
                'title'=>'hello',
                'body'=>'this is body three',
                'status'=>1
            ],
            
            [
                'title'=>'hello welcome to my laptop',
                'body'=>'this is body four',
                'status'=>0
            ]
        ];
        return view('home',compact('blogs'));

    }
}
