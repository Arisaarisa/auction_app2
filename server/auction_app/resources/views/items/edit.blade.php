<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>更新フォーム</h1>
    <!-- つまづき1:更新先はitemsのidにしないと増える ①php artisan rote:listでどこにしないといけないかちゃんと確認-->
    <form action="/items/{{$item->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- つまづき2:リソーシーズの場合PUTを指定してあげないとエラーが起きる ②php artisan rote:listで確認 -->
        @method('PUT')
        <!-- idはそのまま -->
        <input type="hidden" name="id" value="{{$item->id}}">
        <p>
            商品名：<br>
            <input type=" text" name="name" value="{{$item->name}}">
        </p>
        <p>
            商品詳細：<br>
            <input type="text" name="description" value="{{$item->description}}">
        </p>
        <p>
            価格：<br>
            <input type="number" name="price" value="{{$item->price}}">
        </p>
        <p>
            出品者：<br>
            <input type="text" name="seller" value="{{$item->seller}}">
        </p>
        <p>
            電子メール：<br>
            <input type="text" name="email" value="{{$item->email}}">
        </p>
        <p>
            商品画像ＵＲＬ：<br>
            <input type="file" name="image" value="{{$item->image}}">
        </p>
        <input type="submit" value="更新">
    </form>
</body>

</html>