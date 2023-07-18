<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
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
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(5)]);//$postの中身を戻り値にする
        //blade内でつ悪変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入
    } 
    //特定IDのpostを表示する
    public function show(Post $post)
    {
        return view('posts/show')->with (['post'=> $post]);
        //'post'はbladeファイルで使う変数。$postはid=1のPostインスタンス
    }
    public function create()
    {
        return view('posts/create');
    }
    //投稿処理用の関数
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
