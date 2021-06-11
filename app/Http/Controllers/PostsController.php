<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Storage;

class PostsController extends Controller
{
    
    
    
 public function index()
    {
        $posts = Post::all();
        $data = [];
        if (\Auth::check()) {
            // 認証済みユーザ（閲覧者）を取得
            $user = \Auth::user();
            // ユーザとフォロー中ユーザの投稿の一覧を作成日時の降順で取得
            $posts = $user->feed_posts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
        }
        
            $amami = Post::$amami;
            $sanmi = Post::$sanmi;
            $umami = Post::$umami;
            $enmi = Post::$enmi;
            $nigami = Post::$nigami;

        // Welcomeビューでそれらを表示
        return view('posts.posts', ['posts' => $posts]);
        // return view('top', $data);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
            'image' => 'required',
            'title' => 'required',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('bimitomo', $image, 'public');
        $image_path = Storage::disk('s3')->url($path);
        
        $request->user()->posts()->create([
            'content' => $request->content,
            'title' => $request->title,
            'image' => $image_path,
            'enmi' => $request->enmi,
            'sanmi' => $request->sanmi,
            'amami' => $request->amami,
            'nigami' => $request->nigami,
            'umami' => $request->umami,
        ]);
        return back()->with('s3url', $image_path);
        // 前のURLへリダイレクトさせる
        // return redirect()->back()->with('s3url', $image_path);
        // return back();
    }
    
    public function form()
    {
        
    }
    
    public function create(Request $request)
    {

    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $post = \App\Post::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
}
