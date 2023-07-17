<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Post モデルリスト
     * 
     */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);//$postの中身を戻り値にする
        //blade内でつ悪変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入
    } 
    //特定IDのpostを表示する
    public function show(Post $post)
    {
        return view('posts.show')->with (['post'=> $post]);
        //'post'はbladeファイルで使う変数。$postはid=1のPostインスタンス
    }
    
}
