# Flagship 🚩

商店街サイトにて商店街内の店舗一覧を表示する並びに店舗登録・更新・削除するためのECサイトとなります。

公開URL：https://kouta550615.shop/

![shoppingstreettop](商店街サイトトップ.png)

## アプリ概要 💻

### 特徴

受注と発注を一対一で紐づけることができ、案件ごとに粗利益を管理ができます。そのため、在庫を持たずに運営する商社やドロップシッピングを行う企業の業務フローにマッチしています。
店舗の分類ごとで商店街にある店舗一覧を確認することができます。各店舗ごとでクリックすると電話番号や定休日等店舗の情報を閲覧できます。

### 開発の背景

私が住んでいる家の近くには幼少期から存在する商店街がございます。そちらの商店街のサイトを確認すると店舗一覧画面が少し見づらく、店舗の更新機能が無さそうに見受けられました。

そこで、店舗一覧のレイアウトをもう少し見やすくしたい、店舗の管理を簡潔にできるようにしたいという想いからサイト開発しました。

### 主要機能概要

- 店舗新規登録: 店舗を新規で登録
- 店舗更新: 店舗情報を変更があった場合に更新することが可能
- 店舗削除: 店舗が閉店した際に店舗自体を一覧から削除することが可能
- 店舗一覧表示：店舗の分類ごとで店舗一覧を表示可能

## 技術・システム構成 ⚙️

- PHP 8.2.15
- MySQL 8.0.37
- Laravel 10.48.10
- Composer 2.7.6

インフラ:

- AWS(Cloud9)
- A5:SQL Mk-2 2.19.2.0
- XREA free

システムのインストール手順の詳細は以下を参照ください。

- [環境構築](Installation.md)

### テーブル定義

以下を参照ください。

- [テーブル定義]

### ER図

![ER図]

### インフラ構成図

今回のポートフォリオ公開環境では、コストの関係でRDSは使わずEC2内にDBを置いています。
