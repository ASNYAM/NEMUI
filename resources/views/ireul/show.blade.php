<!doctype html>
<html lang=ja>
<head>
<title>
Drink MAGI
</title>
<!-- bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.btn_selectable
{
    border:1px solid gray;
    border-radius: 3px;
    color:gray;
    box-sizing: content-box;
    margin: 0 3px 0 3px;
    padding : 0;
    text-align: center;
}
.btn_active{
    background-color: gray;
    color: white;
}
.btn_selectable label{
    padding: 0;
    margin: 0;
    cursor: pointer;
}
</style>
</head>
<body class="container">
<p class="text-center">
あなたにおすすめの飲み物を解析します
</p>
<p>
<br>これからいくつかの質問に答えていただきます。
<br>質問は三択です。選択し終わったら、最後に送信ボタンを押してください。
</p>
<p>
<form role="form" method="post" action="{{'/ireuls/'.$ireul->id.'/result'}}">
Q1. つよさは？
</p>
<p>
<div class="row btn_group">
    <div class="btn_selectable col align-middle"><label for="yowai" class="col"><input type="radio" class="d-none" name="q1" value="1" id="yowai">弱い</label></div>
    <div class="btn_selectable col align-middle"><label for="ynt" class="col"><input type="radio" class="d-none" name="q1" value="3" id="ynt">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="tuyoi" class="col"><input type="radio" class="d-none" name="q1" value="5" id="tuyoi">強い</label></div>
</div>
</p>
<p>
Q2. 味は？
</p>
<p>
<div class="row btn_group">
    <div class="btn_selectable col align-middle"><label for="amai"><input type="radio" class="d-none" name="q2" value="1" id="amai">甘い</label></div>
    <div class="btn_selectable col align-middle"><label for="fu"><input type="radio" class="d-none" name="q2" value="3" id="fu">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="karai"><input type="radio" class="d-none" name="q2" value="5" id="karai">辛い</label></div>
</div>
</p>
<p>
Q3. 後味は？
</p>
<p>
<div class="row btn_group">
    <div class="btn_selectable col align-middle"><label for="kiri"><input type="radio" class="d-none" name="q3" value="1" id="kiri">キリッと</label></div>
    <div class="btn_selectable col align-middle"><label for="futuu"><input type="radio" class="d-none" name="q3" value="3" id="futuu">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="mattari"><input type="radio" class="d-none" name="q3" value="5" id="mattari">まったり</label></div>
</div>
</p>
<p>
<div class="d-flex justify-content-between">
    <a href="/" class="btn btn-link">戻る</a>
    <input type="submit" value="送信" class="btn btn-success">
</div>
</p>
@csrf
</form>
</body>
</html>