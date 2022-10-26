
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/file-name.css') }}">
</head>
    <body>
        <header>
            <div class="center">
            <button class="header-left" type="button" onclick="history.back()">＜ 戻る</button>
            <span class="header-center">（ファイル名）</span>
            </div>
        </header>
        <div class="center2">
            <section class="contents">
                <a href="{{route('engs.index')}}" class="item">
                <button class="top" type="button">単語一覧・詳細</button>
                </a>
                <a href="" class="item">
                <button class="top2" type="button">テスト</button>
                </a>
                <a href="" class="item clear_box">
                <button class="bottom" type="button">復習</button>
                </a>
                <a href="" class="item">
                <button class="bottom2" type="button">間違えた問題をテスト</button>
                </a>
            </section>
        </div>
    </body>
</html>