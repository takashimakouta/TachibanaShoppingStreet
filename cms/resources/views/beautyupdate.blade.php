@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
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
                    　<a href="{{ url('beauties/')}}" method="GET">
                    　<p>STORE<br>
                    店舗一覧</p>
                    　</a>
                    </li>
            　   </ul>
　　        </nav>
    </header>
    <div id="NewRegister">
        <main>
            <div class="NewUpdate">
                <h1>店舗更新ページ</h1>
                <div class="item-container">
                    <div class="item">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                    <div><strong>内容を修正してください</strong></div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
            
                            </div>
                        @endif
                        <form action="{{url('beautyupdate/add/{id}')}}" method="POST" enctype="multipart/form-data">
                            <!--id -->
                            <div class="form-group mt-2">
                                <input type="hidden" name="id" id="id" class="form-control" value="{{$id}}">
                            </div>
                            <!--id -->
                                
                            <!--/shop_name -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_name">店舗名</label>
                                    <input type="text" name="shop_name"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_name -->
                            
                            <!--/shop_category -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_category_id">分類ID</label>
                                    <input type="text" name="shop_category_id"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_category -->
                            
                            <!--/shop_summary -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_summary">店舗概要</label>
                                    <input type="text" name="shop_summary"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_summary -->
                            
                            <!--/shop_explain -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_explain">店舗説明</label>
                                    <input type="text" name="shop_explain"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_explain -->
                            
                            <!--/shop_postal -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_postal">郵便番号</label>
                                    <input type="text" name="shop_postal"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_postal-->
                            
                            <!--/shop_phone -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_phone">電話番号</label>
                                    <input type="text" name="shop_phone"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_phone-->
                            
                            <!--/shop_fax -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_phone">住所</label>
                                    <input type="text" name="shop_fax"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_fax-->
                            
                            <!--/shop_hour -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_hour">営業時間</label>
                                    <input type="text" name="shop_hour"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_hour-->
                            
                            <!--/shop_dayoff -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_dayoff">定休日</label>
                                    <input type="text" name="shop_dayoff"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_dayoff-->
                            
                            <!--/shop_img -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_img">店舗画像</label>
                                    <input type="file" name="shop_img"  class="form-control" accept="image/jpg,image/png"　value="">
                                </div>
                            </div>
                            <!--/shop_img-->
                            
                            <!--Saveボタン/Backボタン -->
                            <div class="shopupdatebeauty">
                                <button type="submit">保存</button>
                                <a class="btn btn-link pull-right" href="{{ url('beauties/')}}">戻る</a>
                            </div>
                           <!--Saveボタン/Backボタン -->
                                
                        @csrf
                        </form>
                    </div>
                </div>
                
                <div class="iphoneitem-container">
                    <div class="iphoneitem">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                    <div><strong>内容を修正してください</strong></div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
            
                            </div>
                        @endif
                        <form action="{{url('beautyupdate/add/{id}')}}" method="POST" enctype="multipart/form-data">
                            <!--id -->
                            <div class="form-group mt-2">
                                <input type="hidden" name="id" id="id" class="form-control" value="{{$id}}">
                            </div>
                            <!--id -->
                                
                            <!--/shop_name -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_name">店舗名</label>
                                    <input type="text" name="shop_name"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_name -->
                            
                            <!--/shop_category -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_category_id">分類ID</label>
                                    <input type="text" name="shop_category_id"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_category -->
                            
                            <!--/shop_summary -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_summary">店舗概要</label>
                                    <input type="text" name="shop_summary"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_summary -->
                            
                            <!--/shop_explain -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_explain">店舗説明</label>
                                    <input type="text" name="shop_explain"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_explain -->
                            
                            <!--/shop_postal -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_postal">郵便番号</label>
                                    <input type="text" name="shop_postal"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_postal-->
                            
                            <!--/shop_phone -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_phone">電話番号</label>
                                    <input type="text" name="shop_phone"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_phone-->
                            
                            <!--/shop_fax -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_phone">住所</label>
                                    <input type="text" name="shop_fax"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_fax-->
                            
                            <!--/shop_hour -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_hour">営業時間</label>
                                    <input type="text" name="shop_hour"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_hour-->
                            
                            <!--/shop_dayoff -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_dayoff">定休日</label>
                                    <input type="text" name="shop_dayoff"  class="form-control" value="">
                                </div>
                            </div>
                            <!--/shop_dayoff-->
                            
                            <!--/shop_img -->
                            <div class="shopupdatebeautycategory">
                                <div class="form-group mt-2">
                                    <label for="shop_img">店舗画像</label>
                                    <input type="file" name="shop_img"  class="form-control" accept="image/jpg,image/png"　value="">
                                </div>
                            </div>
                            <!--/shop_img-->
                            
                            <!--Saveボタン/Backボタン -->
                            <div class="shopupdatebeauty">
                                <button type="submit">保存</button>
                                <a class="btn btn-link pull-right" href="{{ url('beauties/')}}">戻る</a>
                            </div>
                           <!--Saveボタン/Backボタン -->
                                
                        @csrf
                        </form>
                    </div>
                </div>
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









