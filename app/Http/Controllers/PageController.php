<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function search(Request $request){

        // $page = $request -> input('page');
        return view('layouts/app',[
            // 'page' => $page,
            'type' => 50
        ]);
    }
}
