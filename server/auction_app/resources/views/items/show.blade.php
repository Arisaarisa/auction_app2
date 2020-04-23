<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <b>商品名：{{$item -> name}}</b>
    </p>
    <p>
        <b>商品詳細：{{$item -> description}}</b>
    </p>
    <p>
        <b>価格：{{$item -> price}}</b>
    </p>
    <p>
        <b>出品者：{{$item -> seller}}</b>
    </p>
    <p>
        <b>電子メール：{{$item -> email}}</b>
    </p>

    <p>
        <!-- sotrageの中のpublicのimageディレクトリの中から拾ってくる -->
        <img src="/storage/image/{{$item->image}}">
    </p>
<!-- idを引き継いだまま編集へジャンプ -->
    <a href="/items/{{$item->id}}/edit" class="btn btn-primary">編集する</a>
    <!-- つまづき2:そのまま削除する方法がわからない！のでとりあえずルート追加してdelete.blade.phpに飛ばす -->
    <a href="/items/{{$item->id}}/delete" class="btn btn-primary"> 削除する</a>

</body>

</html>