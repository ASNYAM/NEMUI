<!doctype html>
<html lang=ja>
<head>
<title>
Drink MAGI
</title>
<!-- bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
<div>
  <h1>{{$title}}</h1>
</div>
<div class="content">
  <p>あなたへのオススメは!</p>
  <div>
    <p style="font-size:2em;">{{ $names[rand(0,$lengh - 1)] }}</p>
    <p>シンクロ率:{{ $matchRate }}%</p>
  </div>
</div>
</body>
</html>