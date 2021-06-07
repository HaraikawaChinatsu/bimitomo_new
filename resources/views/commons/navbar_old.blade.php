<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <meta name="robots" content="noindex,nofollow">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="assets/css/style.css" />
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   <script>
   $(function() {
      const hum = $('#hamburger, .close')
      const nav = $('.sp-nav')
      hum.on('click', function(){
         nav.toggleClass('toggle');
      });
   });
   </script>
</head>

<header>
      <h1>
         <a href="/">BIMITOMO</a>
      </h1>
    	<!--<h1 class="logo"><img src="/assets/images/logo.png"></a></h1>-->
        <nav class="pc-nav">
            <ul>
                @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li><a>{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</a></li>
                     {{-- ユーザ詳細ページへのリンク --}}
                    <li><a>{!! link_to_route('users.show', 'マイページ', ['user' => Auth::id()]) !!}</a></li>
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li><a>{!! link_to_route('users.index', 'ユーザー一覧', [], ['user' => Auth::id()]) !!}</a></li>
                  {{-- 投稿一覧ページへのリンク --}}
                    <!--<li></li>-->
                    {{-- ログアウトへのリンク --}}
                    <li><a>{!! link_to_route('logout.get', 'ログアウト', []) !!}</a></li>

                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li><a>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</a></li>
                    {{-- ログインページへのリンク --}}
                    <li><a>{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</a></li>
                @endif
            </ul>
        </nav>
        
        <nav class="sp-nav">
            <ul>
                       @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li><a>{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</a></li>
                     {{-- ユーザ詳細ページへのリンク --}}
                    <li><a>{!! link_to_route('users.show', 'マイページ', ['user' => Auth::id()]) !!}</a></li>
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li><a>{!! link_to_route('users.index', 'ユーザー一覧', [], ['user' => Auth::id()]) !!}</a></li>
                  {{-- 投稿一覧ページへのリンク --}}
                    <!--<li></li>-->
                                {{-- ログアウトへのリンク --}}
                    <li><a>{!! link_to_route('logout.get', 'ログアウト', []) !!}</a></li>

                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li><a>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</a></li>
                    {{-- ログインページへのリンク --}}
                    <li><a>{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</a></li>
                @endif
          </ul>
        </nav>
        
          <div id="hamburger">
              <span></span>
          </div>
</header>