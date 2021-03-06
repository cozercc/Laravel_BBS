<!DOCTYPE html>
<html lang="ja">
<head>
  <title>@yield('title', '一言掲示板・一覧画面')</title>
  <link rel="stylesheet" href="/resources/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" href="https://picsum.photos/200"/>
</head>
<body>
    <div class="container">
        <h1 class="text-center">一言掲示板・一覧画面_練習用_張</h1>
        <div class="panel panel-default">
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" name="button">ログアウト</button>
            </form>
            <div class="btn btn-info">
                <li><a href="{{ route('comments') }}" style="color:black">投稿</a></li>
                <li><a href="{{ route('admin') }}" style="color:black">管理ページ</a></li>
                <li><a href="{{ route('users.edit', Auth::user()) }}" style="color:black">資料更新</a></li>
                <li><a  href="{{ route('users.index') }}" style="color:black">ユーザー一覧</a></li>
            </div>
            @include('users._messages')
            @yield('content')

        @else
        <div class="btn btn-info">
            <a href="{{ route('signup') }}" style="color:black">登録</a>
            </div>
            <div class="btn btn-info">
            <a href="{{ route('login') }}" style="color:black">ログイン</a>
            </div>
        @include('users._messages')
        @yield('content')
        @endif
    </div>
</body>
</html>