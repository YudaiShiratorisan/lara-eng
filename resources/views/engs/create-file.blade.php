<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/create-file.css') }}">
  <header>
    <div class="header-left">
      <button type="button" onclick="history.back()">戻る</button>
    </div>
    <div class="header-center">
      <h2>ファイルを編集</h2>
    </div>


    <style>
      header {
        background-color: rgb(243, 197, 197);
      }

      .header-left{
        justify-content: center;
        margin: 20px;
      }

      .header-center{
        display: flex;
        justify-content: center;
      }

    </style>

  </header>

</head>


<body>
  <div style="padding: 40px; margin-bottom: 40px; border: 5px double white;">
      <input class="file-name" type="text" placeholder="ファイル名">
  </div>
  <button class="btn1" type="submit">登録完了</button>
</body>

<style>
  body {
    background-color: black;
  }

  .file-name{
    background-color: azure;
    padding: 15px; 
    
  }
  .btn1{
    display: flex;
    justify-content: center;
    align-content: center;
    margin-left: 600px;
  }
</style>
</html>