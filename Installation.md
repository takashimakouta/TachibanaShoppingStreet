# 環境構築

開発環境(2024.07時点):

- PHP: `8.2.15`
- MySQL: `8.0.37`
- Composer: `2.7.6`
- Laravel: `10.48.10`
- npm: `10.7.0`
- Xrea free


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

# コマンド入力画面へ戻る
q

# mySQLサーバーへサインインする
# 先ほどコピーしたパスワードを入力する
mysql -u root -p

# パスワードを変更する
ALTER USER 'root'@'localhost' IDENTIFIED BY '新パスワード';

# DBを作成する
create database c9;

# c9が表示されていることを確認する
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

# .envファイルを開き、以下２か所を書き換えする
#　DB_DATABASE を「c9」に変更, DB_PASSWORD を新パスワードに変更する

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laraveldb
DB_USERNAME=dbuser
DB_PASSWORD=secret

# INFO  Server running on [http://127.0.0.1:8080].」が表示され、ブラウザ上でLaravelの画面が表示されていることを確認する
php artisan serve --port=8080

# 以下のリンクから言語ファイルlang.zipをダウンロードする
# ダウンロードしたら、langフォルダをCloud9のcmsフォルダにドラッグ＆ドロップする
https://e-learning.human-osaka.com/pluginfile.php/1057/mod_book/chapter/1156/lang.zip?time=1713784079666


# Bootstrapを追加する
# Laravel UIパッケージをインストールする
composer require laravel/ui:*

# Bootstrapの認証機能用のファイルをインストールする。
php artisan ui bootstrap --auth

# npmリポジトリからライブラリをダウンロードする
npm install && npm run build
npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps

# npmリポジトリをビルドする
npm run build
```


### XREA環境準備

①XREA無料会員登録
```bash
# 以下のURLから「XREA free」公式サイトへアクセスする
https://www.xrea.com/

#「XREA Free（無料プラン）」欄の「無料アカウント作成」を押下し,ユーザー名・パスワードメールアドレス情報を登録します
```


②ポートフォリオアップロード手順
```bash
# 下記URLから「XREA free」サービスへアクセスして、サインインする
https://cp.xrea.com/site/

# 「サイト設定」メニュー＞「サイト一覧」＞「一括変更」を押下する

# 「サイト名」が以下になるように設定する
１つ目が〇〇.s324.xrea.com
２つ目が〇〇.shop
PHPをphp82

# 設定を保存し、一覧で「〇〇.shop」を選択し、「サイト設定の変更」を押下する

# 「SSL」を「無料SSL」を選択する

# AWSのCloud9へアクセスし、cms内のvendor、node_module以外をダウンロードしてください。

# 「サイト設定」メニュー＞「サイト一覧」＞「ユーザーID.xrea.com」＞「ne2ftp ファイルマネージャー」を押下する

# 「新規ディレクトリ＞「アップロード」を押下する

# 「圧縮ファイル」のアップロード欄にある、「ファイルを選択」を押下し、zip化した「〇〇.zip」を選択する。
```

③XREA設定変更
```bash
# 以下のURLへアクセスする
https://www.value-domain.com/ns/

#「サーバー」＞「XREA」を押下し、登録したサーバーが表示されていることを確認する

#「新コントロールパネル」を押下する

#「サイト設定」＞「ツール/セキュリティ」＞「SSH接続IP許可」＞「SSH接続のIPを許可する」を押下する

#「データベースの新規作成」＞「ツール/セキュリティ」＞「SSH接続IP許可」＞「SSH接続のIPを許可する」を押下する

#「データベース」から後ほど利用するパスワードを暗記し、「データベースを新規作成する」を押下する

#コマンドプロンプトを開き、以下のコマンドを実行する
$ ssh -l {user} {host} 例：ssh -l meijin0616 s324.xrea.com

#シェルをbashへ変更する
$ bash
$ echo $shell

#コマンドプロンプトをログアウトする
$ exit

#「https://〇〇.shop」を開いたときに、もってきたLaravelのプロジェクトを参照する
$ cd ~/public_html/
$ rm -rf ドメイン名.shop/
$ln -s /virtual/ドメイン名/public_html/cms/public /virtual/ドメイン名/public_html/ドメイン名.shop
```

④composerのセットアップ
```bash
$ php82cli -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php82cli -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php82cli composer-setup.php
$ php82cli -r "unlink('composer-setup.php');"



#composerのインストール結果を確認する
$ php82cli -d register_argc_argv=1 ~/composer.phar

#「net2ftp ファイルマネージャ」にてbash_profileを開き、以下を追加する
alias composer="php82cli -d register_argc_argv=1 ~/composer.phar"

#bash_prolileの内容を反映する
$	vi ~/.bash_profile

```

⑤node,npmのバージョンアップ
```bash
#node・npmのバージョンを確認して、-bash: [npm/node]: command not foundと表示される場合は以降の手順でインストール作業を行う
$	node -v
$	npm -v


#curlで圧縮ファイルを取ってくる
$	curl -sSL -O https://nodejs.org/dist/v22.11.0/node-v22.11.0-linux-x64.tar.xz



#圧縮ファイルを解凍する
$	tar xvf ./node-v22.11.0-linux-x64.tar.xz	

#ディレクトリを用意する
$	mkdir -p ~/.local/lib

# 作成したディレクトリへ移動する	
$	mv ./node-v22.11.0-linux-x64 ~/.local/lib/
	
# 圧縮ファイルの削除	
$	rm node-v22.11.0-linux-x64.tar.xz

# 「net2ftp ファイルマネージャ」にてbash_profileを開き、以下を追加する
$ export PATH="${HOME}/.local/lib/node-v22.11.0-linux-x64/bin:${PATH}"

# bash_prolileの内容を反映する
$ vi ~/.bash_profile

# インストール完了後に再度、nodeとnpmのバージョンを確認する	
$ node -v
$ npm -v


```

⑥.envの設定
```bash
$ cp .env.example .env
APP_NAME={appname} (自分で決めたappの名前)
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://{domain} (使うドメイン)

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hoge1234 (DBの作成 で決めたDB名、ユーザー名と同じ)
DB_USERNAME=hoge1234 (ユーザー名)
DB_PASSWORD={password} (DBの作成 で決めたパスワード)





⑦ vendor、node_moduleをインストールする
# Cloud9からソースコードを落としてくるときに省いたvendorとnode_moduleフォルダの中身をインストールします。
$ cd ~/public_html/cms/
$ composer install
	
$ npm install
$ npm run build



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
