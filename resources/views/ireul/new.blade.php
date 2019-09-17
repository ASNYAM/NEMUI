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
    <form role="form" method="post" action="/ireuls"  enctype="multipart/form-data">
        @csrf
        <h1>MAGIシステムを使っておすすめを導き出すサービスを公開しましょう！</h1>
        <div class="card">
            <p class="card-text">導き出すもののジャンルは？</p>
            <input type="text" name="name" placeholder="例:飲み物" class="form-control">

            <p class="card-text">データを書き連ねたCSVを入力...</p>
            <input type="file" name="csv">

            <p class="card-text">評価軸1</p>
            <div class="row">
                <div class="col">
                    <input type="text" name="q1_plus" placeholder="例:甘い" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="q1_minus" placeholder="例:苦い" class="form-control">
                </div>
            </div>

            <p class="card-text">評価軸1</p>
            <div class="row">
                <div class="col">
                    <input type="text" name="q2_plus" placeholder="例:甘い" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="q2_minus" placeholder="例:苦い" class="form-control">
                </div>
            </div>

            <p class="card-text">評価軸3</p>
            <div class="row">
                <div class="col">
                    <input type="text" name="q3_plus" placeholder="例:キリッと" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="q3_minus" placeholder="例:まったり" class="form-control">
                </div>
            </div>
            
            <input type="submit" value="送信" class="mt-3 btn btn-success">
        </div>
        <a href="/" class="btn btn-link">戻る</a>
    </form>
</body>
</html>