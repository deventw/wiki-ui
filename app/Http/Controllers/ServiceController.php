<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function create(){
        return view("service.create");
    }

    public function store(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->input("title"),
            'image'=>$request->input("image"),
            "description"=>$request->input("description"),
            "author_id"=>1,
            "created_at"=>date('Y-m-d H:i:s'),
        ]);
        return redirect("/post_created");
    }
    public function update(Request $request){
        DB::table('posts')->where(['id'=>$request->input("id")])
            ->update(["description"=>$request->input("description")]);
        return redirect("/post_updated");
    }

    public function delete(Request $request){
        DB::table('posts')->delete(['id'=>$request->input("id")]);
        return redirect("/post_deleted");
    }

    function show(Request $request){

        $id = $request->input("id");
        $images = [
            [
                "pic" =>  asset('images/ntust.jpg')
            ],
            [
                "pic" =>  asset('images/ntust2.png')
                  ]

            ];
        $image = $images[$id];
        return view("service.show", [
         "img"=>$image

        ]);
    }
}
