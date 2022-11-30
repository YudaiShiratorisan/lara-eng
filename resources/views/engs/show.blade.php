<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/create-show.css') }}">
</head>

<body>
  <header>
    <div class="center">
      <button class="header-left" type="button" onclick="history.back()">＜ 戻る</button>
        <div class="header-center">
          <span>単語一覧・詳細</span>
        </div>
    </div>
    
  </header>
 <div class="for">
    @foreach ($engs as $eng)
        <div class="list">
          <div class="word">単語 : {{ $eng -> word }}</div>
          <div class="meaning">意味 : {{ $eng -> mean }}</div>
          <div class="understanding">理解度 : </div>
        </div>
    @endforeach
  </div>

    <ul class="Pagination">
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/1/">
          <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
          </svg>
        </a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link isActive" href="/pages/1/"><span>1</span></a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/2/"><span>2</span></a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/3/"><span>3</span></a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/4/"><span>4</span></a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/5/"><span>5</span></a>
      </li>
      <li class="Pagination-Item">
        <a class="Pagination-Item-Link" href="/pages/5/">
          <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
          </svg>
        </a>
      </li>
    </ul>
</body>
