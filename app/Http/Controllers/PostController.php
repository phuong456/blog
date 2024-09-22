<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function create(){
        return view('createpost');
    }
    public function postCreate(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        DB::table('post')->insert([
            'title' => $title,
            'content' => $content,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->action([PostController::class, 'getPost']);
    }
    
    public function getPost()
    {
        $posts = DB::table('post')->get();
        return view('post', ['posts' => $posts]);
    }
}