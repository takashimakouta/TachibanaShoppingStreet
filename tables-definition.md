# テーブル定義

 - [users ユーザー](#users-ユーザー)
 - [shopliststocks 店舗情報](#shopliststocks-店舗情報)
 - [shopcategorys 店舗分類ID](#shopcategorys-店舗分類ID)

## users ユーザー

商店街サイトにて新規登録できるユーザー情報を管理する。
| カラム       | 名称         | 型            | 説明   |
|--------------|--------------|---------------|--------|
| id           | ID            | bigint_unsighed | PK     |
| name         | ユーザー名     | string        |        |
| email        | メールアドレス | string        |        |
| created_at   | 作成日時       | timestamp     |        |
| updated_at   | 更新日時       | timestamp     |        |

## shopliststocks 店舗情報

| カラム       | 名称         | 型            | 説明   |
|------------------|--------------|---------------|--------|
| id               | ID           | bigint_unsighed | PK     |
| shop_name        | 店舗名        | string        |        |
| shop_category_id | 店舗分類ID    | string        |        |
| shop_summary     | 店舗概要      | string        |        |
| shop_postal      | 郵便番号      | string        |        |
| shop_phone       | 電話番号      | string        |        |
| shop_postal      | 郵便番号      | string        |        |
| shop_fax         | 住所         | string        |        |
| shop_hour        | 営業時間      | string        |        |
| shop_dayoff      | 定休日       | string        |        |
| shop_img         | 店舗画像      | string        |        |
| created_at   | 作成日時     | timestamp     |        |
| updated_at   | 更新日時     | timestamp     |        |
