@if (count($posts) > 0)
    <ul class="list-unstyled">
        @foreach ($posts as $post)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <!--<img class="mr-2 rounded" src="{ Gravatar::get$post->user->email, ['size' => 50]) }}" alt="">-->
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        <!--!! link_to_route'users.show', $userName, ['user' => $post->user->id]) !!}-->
                        <span class="text-muted">posted at {{ $post->created_at }}</span>
                    </div>

 @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    調味料名: {{ $post->title }}
                </div>
                <div class="card-body">
                    {!! nl2br(e($post->content)) !!}
                </div>


                    <p class="card-text">
                    <li> {!! nl2br(e($post->enmi)) !!}</li>
                    <li> {!! nl2br(e($post->amami)) !!}</li>
                    <li> {!! nl2br(e($post->sanmi)) !!}</li>
                    <li> {!! nl2br(e($post->nigami)) !!}</li>
                    <li> {!! nl2br(e($post->umami)) !!}</li>
                    </p>
                
                    <div>
                        @if (Auth::id() == $post->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                
                </div>
 @endforeach
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $posts->links() }}
@endif