<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>削除しますか？</h1>
    <form action="/items/{{$item->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <!-- idはそのまま -->
        <input type="hidden" name="id" value="{{$item->id}}">
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
        <input type="submit" value="削除">
    </form>

</body>

</html>