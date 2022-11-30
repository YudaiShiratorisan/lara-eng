<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/create-word.css') }}">
</head>

<?php
        // データベース接続文字列
        $dsn = 'mysql:dbname=lara-eng;host=localhost';
        $user = 'root';
        $file = '';
        // データベースへの接続を確認
        $dbh = new PDO($dsn, $user, $file);
        $dbh->query('SET NAMES UTF8MB4');
        $sql = 'SELECT * FROM files';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $files = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<body>
  <header>
    <div class="center">
        <button class="header-left" type="button" onclick="history.back()">＜ 戻る</button>
        <div class="header-center">
          <span>単語・熟語を追加</span>
        </div>
    </div>  
  </header>
  <form action="{{ route('engs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="padding: 25px 60px 5px 60px; margin: 30px 40px 40px 40px; border: 5px double white;">
      <input class="word-idiom" type="text" placeholder="user_id" name="user_id">
      <input class="word-idiom" type="text" placeholder="単語・熟語" name="word">
      <input class="meaning" type="text" placeholder="意味" name="mean">
  
      <div class="items">
        <form action="show.blade.php" method="POST">
        @csrf
          <select class="whichfile" name="which_file" value="">            
            <option value="" disable selected style="display:none;">どのファイル？</option>
              @foreach ($files as $file)
                <option class="file1">{{ $file['file'] }}</option>
              @endforeach
          </select>
        </form>
  
        <select class="whichcolor" name="which-color">
          <option value="" disable selected style="display:none;">単語のイメージ色は？</option>
          <option value="赤">赤</option>
          <option value="青">青</option>
          <option value="黄">黄</option>
          <option value="緑">緑</option> 
          <option value="なし">なし</option>
         </select>
      </div>  
    </div>

    <a href="{{ route('welcome') }}" style="text-decoration:none">
      <button class="btn1" type="submit">登録完了</button>
    </a>
  </form>
      
</body>

</html>