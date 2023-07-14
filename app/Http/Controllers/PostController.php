<?php

namespace App\Http\Controllers;
//use宣言は外部にあるクラスをPostController内にインポートできる
//この場合、App\Models内のPostクラスをインポートしている
use Illuminate\Http\Request;
use App\Modes\Post;//PostController.php内でPost.phpのPostクラスを使用するために宣言

class PostController extends Controller
{
    /**
    * Post一覧を表示する
    * 
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $post->get();//$postの中身を戻り値にする
    }
}

