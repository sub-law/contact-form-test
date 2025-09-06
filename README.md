# laravel-docker-template
🌿 確認テスト：お問い合わせフォーム
セットアップ用ブックマーク集

🚀 環境構築手順　※()カッコ内はコマンド
Git Cloneでリポジトリを取得
//修正中

🚀リポジトリ名変更
(mv laravel-docker-template 任意の名前)

githubでリモートリポジトリの url を変更
ローカルリポジトリから紐付け先を変更
(cd 任意の名前)
(git remote set-url origin githubで作成したリポジトリのurl)
(git remote -v)

現在のローカルリポジトリのデータをリモートリポジトリに反映
(git add .)
(git commit -m "リモートリポジトリの変更")
(git push origin main)

🚀Laravel環境構築

プロジェクト直下に以下のファイル2つを作成
.env
.gitignore

.envに以下の記述を追記（UID/GIDはホストOSのユーザーIDに合わせて設定）
UID=1000
GID=1000

.gitignoreに以下の記述を追記
.env
docker/mysql/data/

MySQL 通信設定（※OSに応じて docker-compose.yml 編集）
docker-compose.ymlの編集
php:
    build: ./docker/php
    volumes:
      - ./src:/var/www/
    user: "${UID}:${GID}"

Docker ビルド
(docker-compose up -d --build)

PHPコンテナに入る
（docker-compose exec php bash）

Composer インストール
（composer install）

.env 作成と環境変数設定
（cp .env.example .env）
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

アプリキー生成
（php artisan key:generate）

🚀データベース・ダミーデータの作成

データベースの作成（マイグレーション）
（php artisan migrate）

ダミーデータの作成
(php artisan db:seed)

PHPコンテナから出る　"Ctrl+D"

🧪 使用技術
php:8.1-fpm

Laravel Framework 8.83.8（※以下コマンドで確認可能）  
(php artisan --version)

MySQL 8.0.26

🌐 アクセスURL
お問い合わせフォーム入力ページ：http://localhost/
ユーザー登録ページ：http://localhost/register/
管理画面：http://localhost/admin/contacts/

phpMyAdmin:http://localhost:8080/
ログイン情報：  
ユーザー名：laravel_user  
パスワード：laravel_pass


test12345@example.com
123456789