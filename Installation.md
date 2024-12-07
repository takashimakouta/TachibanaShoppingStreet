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

③データベース(MySQL)のインストール

```bash
# データベースがインストールされているか確認する
X.X.X-MariaDBが表示されている場合、以降の手順に進んでください
mysql --version

# MariaDB を削除する
sudo dnf remove -y mariadb-*

# リリースされているrpmのパッケージをインストールする
sudo dnf -y localinstall  https://dev.mysql.com/get/mysql80-community-release-el9-5.noarch.rpm

# MySQLをインストールする
sudo dnf -y install mysql

# MySQL Server をインストールする
sudo dnf -y install mysql-server

# MySQL dnf リポジトリが正常にインストールされたことを確認する
sudo dnf list installed | grep mysql

# MySQLサーバーを起動する
sudo systemctl start mysqld

# MySQLサーバーを起動している確認する
sudo systemctl status mysqld

# MySQLサーバーのログ情報を確認する
 [Note]と書かれている行の 「root@localhost:」 後に書かれているパスワードをコピーする
sudo less /var/log/mysqld.log

＃コマンド入力画面へ戻る
q

＃mySQLサーバーへサインインする
  先ほどコピーしたパスワードを入力する
mysql -u root -p

＃パスワードを変更する
ALTER USER 'root'@'localhost' IDENTIFIED BY '新パスワード';

＃DBを作成する
create database c9;

＃c9が表示されていることを確認する
show databases;
```

④Laravelをインストールする
```bash
# SWAP領域を作成する
sudo dd if=/dev/zero of=/swapfile bs=1M count=512
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile

# Laravelをインストールする
composer create-project laravel/laravel cms 10.* --prefer-dist

# .envファイルの再設定
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
