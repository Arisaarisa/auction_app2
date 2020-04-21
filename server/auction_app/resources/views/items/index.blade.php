<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction_app</title>
</head>

<body>
    <h1>出品商品一覧</h1>
    <table>
        <!-- リンクをまわして出力 -->
        @foreach ($items as $item)
        <tr>
            <li><a href="/items/{{$item -> id}}">{{$item -> name}}</a></li>
        </tr>
        @endforeach
    </table>

    <!-- 新規登録画面へジャンプする -->
    <a href="items/create" class="btn btn-primary">出品する</a>

</body>

</html>