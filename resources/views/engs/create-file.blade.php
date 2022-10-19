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
    <button class="header-left" type="button" onclick="history.back()">＜ 戻る</button>
    <div class="header-center">
      <h2>ファイルを追加</h2>
    </div>
  </header>
  <div style="padding: 55px; margin: 50px 40px 40px 40px; border: 5px double white;">
      <input class="file-name" type="text" placeholder="ファイル名">
  </div>
  <button class="btn1" type="submit">登録完了</button>


  {{-- <button> 登録完了 </button> --}}


</body>

</html>