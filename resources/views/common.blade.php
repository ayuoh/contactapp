{{--
    プログラム名		：common.blade.php
    プログラム説明	：お問い合わせ管理システムLaravel版、画面の共通部分
    作成日時			：2023/1/14
    作成者			：大木
--}}

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <title>@yield('title')</title>
  <link type="text/css" rel="stylesheet" href="{{asset('/css/Zen_Maru_Gothic.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{asset('/css/reset.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{asset('/css/style.css')}}" />
</head>

<body>

  <header>
    <h1>英会話スクール</h1>
  </header>

  <div class="@yield('main_class')">
    <div class="h2">
      <div>
        <h2>@yield('title')</h2>
      </div>
    </div>

    <main>
      <div class="wrapper">
        @yield('content')
      </div>
    </main>
  </div>

  <footer>
    <div class="copyright"><small>copyright (c) all rights reserved.</small></div>
  </footer>
</body>

</html>
