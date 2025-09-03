# laravel-docker-template
🌿 お問い合わせフォーム：セットアップ用ブックマーク集
アプリケーション名：contact-form-test
🚀 環境構築手順
Git Clone（リポジトリ取得）
(git clone git@github.com:Estra-Coachtech/laravel-docker-template.git)

リポジトリ名変更
(mv laravel-docker-template contact-form-test)

githubでリモートリポジトリの url を変更
ローカルリポジトリから紐付け先を変更
(cd contact-form-test)
(git remote set-url origin 作成したリポジトリのurl)
(git remote -v)

現在のローカルリポジトリのデータをリモートリポジトリに反映
(git add .)
(git commit -m "リモートリポジトリの変更")
(git push origin main)


Docker ビルド
(docker-compose up -d --build)
(code .)

MySQL 通信設定（※OSに応じて docker-compose.yml 編集）

🛠 Laravel環境構築

プロジェクト直下に
.env
.gitignoreを作成

.env（UID/GIDはホストOSのユーザーIDに合わせて設定）
UID=1000
GID=1000

.gitignore
.env
docker/mysql/data/

docker-compose.yml 編集
php:
    build: ./docker/php
    volumes:
      - ./src:/var/www/
    user: "${UID}:${GID}"

PHPコンテナに入る（docker-compose exec php bash）

Composer インストール（composer install）

.env 作成と環境変数設定（.env.example→.env）
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

アプリキー生成（php artisan key:generate）

マイグレーション実行（php artisan migrate）

🧪 使用技術
php:8.1-fpm

Laravel Framework 8.83.8（※以下コマンドで確認可能）  
(php artisan --version)

MySQL 8.0.26

🌐 アクセスURL
開発環境：http://localhost

phpMyAdmin:http://localhost:8080/
ログイン情報：  
ユーザー名：laravel_user  
パスワード：laravel_pass