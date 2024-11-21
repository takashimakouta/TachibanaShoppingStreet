@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="shopheader">
            <h1><a href="/" target="_self"><img src="../../../images/home/logo.png" alt="立花商店街"></a>
            </h1>
            <h1><a href="/" target="_self">TACHIBANA SHOPS STREET</a>
            </h1>
                <nav>
                     <ul style="list-style: none;">
                        <li class= "shopdetailheaderlink">
                        　<a href="{{ url('foodbeverages/')}}" method="GET">
                        　<p>STORE<br>
                        店舗一覧</p>
                        　</a>
                        </li>
                　   </ul>
    　　        </nav>
            　　<div class="productCreate-container">
                    @if(session('message'))
                        <div class="flash">
                            {{session('message')}}
                        </div>
                        @endif
                        @if($errors->any())
                        <ul class="error">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}aa</li>
                            @endforeach
                        </ul>
                    @endif
                <div/>
        </header>
    <div id="NewRegister">
        <main>
            <div class="NewRegister">
                <h1>店舗登録ページ</h1>
                <form  action="{{ url('shoplistStore')}}" method="POST" enctype="multipart/form-data">
                
                    <div class="title-wrap">店舗名 : <input type="text" name="shop_name" placeholder="店舗名" value="{{old('shop_name')}}"></div>
                    <div class="category-wrap">分類ID : <input type="text" name="shop_category_id" placeholder="ID" value="{{old('shop_category_id')}}"></div>
                    <div class="summary-wrap">店舗概要 : <input type="text" name="shop_summary" placeholder="店舗概要" value="{{old('shop_summary')}}"></div>
                    <div class="detail-wrap">店舗説明 : <textarea type="text" name="shop_explain" cols="30" rows="10" placeholder="店舗説明">{{old('shop_explain')}}</textarea></div>
                    <div class="postal-wrap">郵便番号 : <input type="text" name="shop_postal" placeholder="000-0000" value="{{old('shop_postal')}}"></div>
                    <div class="phone-wrap">電話番号 : <input type="text" name="shop_phone" placeholder="000-0000-0000" value="{{old('shop_phone')}}"></div>
                    <div class="fax-wrap">住所 : <input type="text" name="shop_fax" placeholder="尼崎市南武庫之荘○丁目" value="{{old('shop_fax')}}"></div>
                    <div class="hour-wrap">営業時間 : <input type="text" name="shop_hour" placeholder="09:00～" value="{{old('shop_hour')}}"></div>
                    <div class="dayoff-wrap">定休日 : <input type="text" name="shop_dayoff" placeholder="月、日" value="{{old('shop_dayoff')}}"></div>
                    <div class="img-wrap">店舗画像 : <input type="file" name="shop_img" accept="image/jpg,image/png"></div>
                    
                
                    <div class="submit-wrap"><input type="submit" value="登録する">
                
                
                    <a class="btn btn-link pull-right" href="{{ url('foodbeverages/')}}">戻る</a>
                    </div>
                    @csrf
            
                </form>
            </div>
        </main>
        <footer>
            <div class="shopdetailfooterlogo">
                <p>
                    &copy; Copyright 立花商店街 All rights reserved.
                </p>
            </div>
        </footer>
    </div>
    </body>
</html>
@endsection
