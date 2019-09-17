<!doctype html>
<html lang=ja>
<head>
<title>
MAGI SYSTEM
</title>
<!-- bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
    <header class=" mt-3 nav justify-content-end">
        <a href="/ireuls/create" class="btn btn-primary">つくってみる</a>
    </header>
    <h1>ようこそ、MAGIシステムへ！</h1>
    <p>あなたに導き出せるモノのジャンルは今これぐらいあります。</p>
    <div class="row">
        @foreach($ireuls as $ireul)
            <div class="mt-4 col-sm-4 col-xs-6">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{$ireul->name}}</p>
                        <div class="d-flex justify-content-end">
                            <a href="/ireuls/{{$ireul->id}}" class="btn btn-primary stretched-link">みてみる</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
