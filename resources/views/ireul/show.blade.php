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
<form role="form" method="post" action="/ireuls/1/result">
Q1. つよさは？
</p>
<p>

<div class="row btn_group" id="first">
    <div class="btn_selectable col align-middle"><label for="yowai" class="col"><input type="radio" class="d-none" name="q1" value="1" id="yowai" onclick="changeQ1Active(this)">弱い</label></div>
    <div class="btn_selectable col align-middle"><label for="ynt" class="col"><input type="radio" class="d-none" name="q1" value="3" id="ynt" onclick="changeQ1Active(this)">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="tuyoi" class="col"><input type="radio" class="d-none" name="q1" value="5" id="tuyoi" onclick="changeQ1Active(this)">強い</label></div>
</div>
</p>
<p>
Q2. 味は？
</p>
<p>
<div class="row btn_group" id="second">
    <div class="btn_selectable col align-middle"><label for="amai" class="col"><input type="radio" class="d-none" name="q2" value="1" id="amai" onclick="changeQ2Active(this)">甘い</label></div>
    <div class="btn_selectable col align-middle"><label for="fu" class="col"><input type="radio" class="d-none" name="q2" value="3" id="fu" onclick="changeQ2Active(this)">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="karai" class="col"><input type="radio" class="d-none" name="q2" value="5" id="karai" onclick="changeQ2Active(this)">辛い</label></div>
</div>
</p>
<p>
Q3. 後味は？
</p>
<p>
<div class="row btn_group" id="third">
    <div class="btn_selectable col align-middle"><label for="kiri" class="col"><input type="radio" class="d-none" name="q3" value="1" id="kiri" onclick="changeQ3Active(this)">キリッと</label></div>
    <div class="btn_selectable col align-middle"><label for="futuu" class="col"><input type="radio" class="d-none" name="q3" value="3" id="futuu" onclick="changeQ3Active(this)">ふつう</label></div>
    <div class="btn_selectable col align-middle"><label for="mattari" class="col"><input type="radio" class="d-none" name="q3" value="5" id="mattari" onclick="changeQ3Active(this)">まったり</label></div>
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
<script>
function changeQ1Active(button){
    let obj = document.querySelectorAll("#first > div");
    for(let idx = 0 ; idx < 3 ; idx++){
        obj[idx].classList.remove('btn_active');
    };
    button.parentNode.parentNode.classList.add('btn_active');
}

function changeQ2Active(button){
    let obj = document.querySelectorAll("#second > div");
    for(let idx = 0 ; idx < 3 ; idx++){
        obj[idx].classList.remove('btn_active');
    };
    button.parentNode.parentNode.classList.add('btn_active');
}

function changeQ3Active(button){
    let obj = document.querySelectorAll("#third > div");
    for(let idx = 0 ; idx < 3 ; idx++){
        obj[idx].classList.remove('btn_active');
    };
    button.parentNode.parentNode.classList.add('btn_active');
}
</script>
</html>