<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <h2 class="contact-form__heading">contact</h2>

            <form class="form" action="/confirm" method="post" novalidate>
                @csrf
                <!-- お名前（姓・名 横並び） -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="last_name">お名前</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content is-row-2">
                        <div class="form__input--text">
                            <input id="last_name" type="text" name="last_name" placeholder="姓（例：山田）" required>
                        </div>
                        <div class="form__input--text">
                            <input id="first_name" type="text" name="first_name" placeholder="名（例：太郎）" required>
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- 性別（装飾なしのラジオ） -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <label><input type="radio" name="gender" value="1" checked> 男性</label>
                        <label><input type="radio" name="gender" value="2"> 女性</label>
                        <label><input type="radio" name="gender" value="3"> その他</label>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- メールアドレス -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="email">メールアドレス</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input id="email" type="email" name="email" placeholder="test@example.com" required>
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- 電話番号（3分割 横並び） -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="tel1">電話番号</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content is-row-3">
                        <div class="form__input--text">
                            <input id="tel1" type="text" inputmode="numeric" pattern="\d*" name="tel1" placeholder="080" required>
                        </div>
                        <div class="form__input--text">
                            <input id="tel2" type="text" inputmode="numeric" pattern="\d*" name="tel2" placeholder="1234" required>
                        </div>
                        <div class="form__input--text">
                            <input id="tel3" type="text" inputmode="numeric" pattern="\d*" name="tel3" placeholder="5678" required>
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- 住所 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="address">住所</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input id="address" type="text" name="address" placeholder="東京都〇〇区〇〇町3-2-3" required>
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- 建物名（任意） -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="building">建物名</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input id="building" type="text" name="building" placeholder="〇〇マンション101">
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- お問い合わせの種類 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="type">お問い合わせの種類</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select id="type" name="type" required>
                                <option value="" selected>選択してください</option>
                                <option value="product">商品について</option>
                                <option value="bug">不具合の報告</option>
                                <option value="other">その他</option>
                            </select>
                            <!--後ほど実装
                                {{-- 
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach 
                                --}}-->
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- お問い合わせ内容 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="message">お問い合わせ内容</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea id="message" name="message" placeholder="お問い合わせ内容をご記載ください" required></textarea>
                        </div>
                        <div class="form__error" aria-live="polite"></div>
                    </div>
                </div>

                <!-- 送信 -->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信する</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>