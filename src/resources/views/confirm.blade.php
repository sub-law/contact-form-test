<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>FashionablyLate - Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <p class="header__logo" href="/">
                FashionablyLate
            </p>
        </div>
    </header>

    <div class="container">
        <h1>Confirm</h1>
        <table class="confirm-table">
            <tr>
                <th>お名前</th>
                <td>山田　太郎</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>男性</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>test@example.com</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>08012345678</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>東京都渋谷区千代谷3-3-3</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>千代谷マンション301</td>
            </tr>
            <tr>
                <th>商品のお問い合わせの種類</th>
                <td>商品の交換について</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>届いた商品が注文した商品ではありませんでした。商品の返品と交換をお願いしたいです。</td>
            </tr>
        </table>

        <div class="button-area">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <button type="submit" class="submit-btn">送信</button>
            </form>
            <form action="{{ route('edit') }}" method="get">
                <button type="submit" class="edit-btn">修正</button>
            </form>
        </div>
    </div>
</body>

</html>