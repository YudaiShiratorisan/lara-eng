<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/create-file.css') }}">
</head>

<body>
  <header>
    <div class="center">
      <button class="header-left" type="button" onclick="history.back()">＜ 戻る</button>
      <span class="header-center">ファイルを追加</span>
    </div>
  </header>
  <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div style="padding: 55px; margin: 50px 40px 40px 40px; border: 5px double white;">
      <input class="file-name" type="text" placeholder="user_id" name="user_id">
      <input class="file-name" type="text" placeholder="ファイル名" name="file">
    </div>
    
    <a href="{{ route('welcome') }}" style="text-decoration:none">
      <button class="btn1" type="submit">登録完了</button>
    </a>
  </form>
</body>

</html>