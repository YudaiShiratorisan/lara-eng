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
        <div class="contents">
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
        </div>
    </body>
    <footer class="foot">
        <?php
        $dsn = 'mysql:dbname=lara-eng;host=localhost';
        $user = 'root';
        $file = '';
        $dbh = new PDO($dsn, $user, $file);
        $dbh->query('SET NAMES UTF8MB4');
        $sql = 'SELECT * FROM files';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $files = $stmt->fetchALL(PDO::FETCH_ASSOC);
        ?>
        <?php foreach ($files as $file): ?>
          <a href="{{route('engs.index')}}">
            <p class="file1">ファイル名 : <?php echo $file['file']; ?></p>
          </a>
          {{-- <div class="file1">ファイル名 : {{ $file -> file }}</div> --}}
        <?php endforeach ?>
    </footer>
</html>
