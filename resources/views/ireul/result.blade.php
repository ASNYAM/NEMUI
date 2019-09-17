<!doctype html>
<html lang=ja>
<head>
<title>
Drink MAGI
</title>
<!-- bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
  background-color : black;
  }
p {
  font-family: serif;
  font-size: 3em;
  font-weight: bold;
  padding: 0.5em 0;
  /* transform: scale(1.3, 2.3); */
  color : white;
}
</style>
</head>
<body class="container">
<div>
  <p class="text-left" style="font-size: 6.8em;margin: 0;padding: 0;">貴方へのオススメ</p>
  <div class="row">
    <p class="col-sm-6" style="-ms-writing-mode: tb-rl;writing-mode: vertical-rl;font-size:5em;margin: 0;padding: 0;">{{ $names[rand(0,$lengh - 1)] }}</p>
    <p class="col-sm-6 text-right" style="margin-top: 27%;padding-bottom:0;margin-bottom:0;">シンクロ率:{{ $matchRate }}%</p>
  </div>
  <div class="d-flex justify-content-between" style="margin-top: 120px;">
    <a href="/" class="btn btn-primary">トップへ戻る</a>
    <a href="/ireuls/{{ $id }}"  class="btn btn-success">質問画面に戻る</a>
  </div>
</div>
</body>
</html>