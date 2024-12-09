# テーブル定義

 - [users ユーザー](#users-ユーザー)
 - [shopliststocks 店舗情報](#shopliststocks-店舗情報)
 - [shopcategorys 店舗分類ID](#shopcategorys-店舗分類ID)

## users ユーザー

商店街サイトにて新規登録できるユーザー情報を管理する。
| カラム       | 名称         | 型            | 説明   |
|--------------|--------------|---------------|--------|
| id           | ID           | bigint_unsighed | PK     |
| name         | ユーザー名    | string        |        |
| email        | メールアドレス | string        |        |
| created_at   | 作成日時     | timestamp     |        |
| updated_at   | 更新日時     | timestamp     |        |
