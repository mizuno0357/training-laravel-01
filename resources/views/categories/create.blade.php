<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カテゴリー</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>カテゴリー登録</h1>
    </header>
    {{ Form::open(['route' => 'categories.store']) }}
    <div class="form-group">
{{ Form::label('name', 'カテゴリー名：') }}
{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
</div>
</div>
</body>
</html>