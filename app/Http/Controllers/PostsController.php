<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Storage;

class PostsController extends Controller
{
    //画像およびコメントアップロード
    public function upload(Request $request){

//Validatorファサードのmakeメソッドの第１引数は、バリデーションを行うデータ。
//第２引数はそのデータに適用するバリデーションルール
        $validator = Validator::make($request->all(), [
            'image' => 'required|max:10240|mimes:jpeg,gif,png',
        ]);

//上記のバリデーションがエラーの場合、ビューにバリデーション情報を渡す
        if ($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
//s3に画像を保存。第一引数はs3のディレクトリ。第二引数は保存するファイル。
//第三引数はファイルの公開設定。
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $file, 'public');
//カラムに画像のパスとタイトルを保存
        Post::create([
            'image' => $path,
        ]);

        return redirect('/');
    }
    
    
    
 public function index()
    {
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
        return view('top', $data);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->posts()->create([
            'content' => $request->content,
            'title' => $request->title,
            'image' => $request->image,
            'enmi' => $request->enmi,
            'sanmi' => $request->sanmi,
            'amami' => $request->amami,
            'nigami' => $request->nigami,
            'umami' => $request->umami,
        ]);

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    protected function create(array $data)
    {
        return Post::create([
            'title' => $data['title'],
            'content' =>$data['content'], 
            'image' =>$data['image'],
            'enmi' => $data['enmi'],
            'sanmi' => $data['sanmi'],
            'amami' => $data['amami'],
            'nigami' => $data['nigami'],
            'umami' => $data['umami'], 
        ]);
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