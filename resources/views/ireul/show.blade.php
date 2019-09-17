<!doctype html>
<html lang=ja>
<head>
<title>
Drink MAGI
</title>
<!-- bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<p>
<h1>あなたにおすすめの飲み物を解析します</h1>
</p>
<p>
<br>これからいくつかの質問に答えていただきます。
<br>質問は三択です。選択し終わったら、最後に送信ボタンを押してください。
</p>
<p>
<form role="form" method="post" action="/ireuls/1/result">
Q1. つよさは？
</p>
<p>
<input type="radio" name="q1" value="1">弱い
<input type="radio" name="q1" value="3">ふつう
<input type="radio" name="q1" value="5">強い
</p>
<p>
Q2. 味は？
</p>
<p>
<input type="radio" name="q2" value="1">甘い
<input type="radio" name="q2" value="3">ふつう
<input type="radio" name="q2" value="5">辛い
</p>
<p>
Q3. 後味は？
</p>
<p>
<input type="radio" name="q3" value="1">キリッと
<input type="radio" name="q3" value="3">ふつう
<input type="radio" name="q3" value="5">まったり
</p>
<p>
<input type="submit" value="送信" class="btn btn-success">
</p>
@csrf
</form>
</body>
</html>