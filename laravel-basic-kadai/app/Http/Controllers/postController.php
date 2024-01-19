<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class postController extends Controller {
    public function index() {
        // postsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();
    
        // 変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
      }    
}