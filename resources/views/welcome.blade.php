<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>lara-english</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/top.css') }}">

    </head>
    <body class="antialiased">
        <header class="header">
            <p class="theme"><span>Anki</span></p>
            <button class="login">ログイン</button>
            <button class="touroku">新規登録</button>
        </header>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="add-word">
            <a href="{{route('engs.word')}}">
                <button class="txt" type="submit">単語・熟語を追加</button>
            </a>
        </div>
        <div class="add-file">
            <a href="{{route('engs.file')}}">
                <button class="file" type="submit">ファイルを追加</button>
            </a>
        </div>
        <ul class="all-file">
            <li class="file1"><a href="{{route('engs.index')}}" class="file-button1" style="text-decoration:none;"><p class="file-txt1">新規ファイル</p></a></li>
            <li class="file2"><a href="{{route('engs.index')}}" class="file-button2" style="text-decoration:none;"><p class="file-txt2">新規ファイル2</p></a></li>
            <li class="file3"><a href="{{route('engs.index')}}" class="file-button3" style="text-decoration:none;"><p class="file-txt3">新規ファイル3</p></a></li>
        </ul>
        <ul class="delete">
            <li class="delete1"><button class="sakujyo" type="submit">削除</button></li>
            <li class="delete2"><button class="sakujyo" type="submit">削除</button></li>
            <li class="delete3"><button class="sakujyo" type="submit">削除</button></li>
        </ul>
    </body>
</html>
