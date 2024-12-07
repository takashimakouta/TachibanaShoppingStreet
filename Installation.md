# 環境構築

開発環境(2024.07時点):

- PHP: `8.2.15`
- MySQL: `8.0.37`
- Composer: `2.7.6`
- Laravel: `10.48.10`


## インストール手順

### Cloud9上でのLaravel開発環境構築

①PHPのインストール

```bash
# インストール済みパッケージをアップデートし、旧パッケージを自動削除する
sudo dnf update -y

# インストールする前に別バージョンのPHPがインストールされていたら削除
sudo dnf remove -y php-common

# PHPをインストールする
sudo dnf install -y php

# PHPのパッケージをインストールする
sudo dnf install -y php-mbstring php-pdo php-gd php-mysqlnd php-xml

# PHPのバージョンを確認する
php -v
```

②Composerのインストール

```bash
# Composerのインストール
curl -sS https://getcomposer.org/installer | php

# composer.pharファイルを/usr/bin/composerへ移動する
sudo mv composer.phar /usr/bin/composer

# composerのアスキーアートが出ることを確認する
composer
```

### Docker環境準備

docker環境をスタート

```bash
docker compose up -d
```

`app`サービスのコンテナ内で bashシェルを起動する

```bash
docker compose exec app bash
```

作業ディレクトリ`project`（=Laravelのインストール先）に入ったことを確認（ここではユーザー名=`docker`に設定している）

```bash
<user_name>@<container_id>:/project$ 
```

### Laravel準備

必要なパッケージをインストール

```bash
composer install 
```

`.env`ファイルを用意

```bash
cp .env.example .env
```

viエディタで開いて（`vi .env`）、以下DB設定を記述

```bash
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laraveldb
DB_USERNAME=dbuser
DB_PASSWORD=secret
```

DBに正しく接続できているか確認

```bash
$ php artisan tinker

> DB::select('select 1');
= [
    {#6462
      +"1": 1,
    },
  ]
```

テーブルとダミーデータを用意

```bash
php artisan migrate --seed
```

APP KEYを準備

```bash
php artisan key:generate
```

npmでパッケージをインストール

```bash
npm install
```

npmコマンドでViteを起動

```bash
npm run dev
```

ブラウザでアクセス、ログイン画面が表示されれば成功。

[http://localhost:8000](http://localhost:8000)

ログイン情報：

- メールアドレス: `system-admin@example.com`
- パスワード: `testpass`
