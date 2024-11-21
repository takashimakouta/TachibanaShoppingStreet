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
        <h1>TACHIBANA SHOPS STREET</h1>
            <nav>
                 <ul style="list-style: none;">
                    <li class= "shopdetailheaderlink">
                    　<a href="{{ url('furnituregoods/')}}" method="GET">
                    　<p>STORE<br>
                    店舗一覧</p>
                    　</a>
                    </li>
            　   </ul>
　　        </nav>
    </header>
    <main>

        <div class="NewRegister">
            <div class="shopdetailname">
                <p>{{$shopliststock->shop_name}}</p>
            </div>
            
            <div class="item">
                <div class="shopphoto"　flex-grow>
                    <p><div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div></p>
                    
                </div>
                <div class="shopdetail">
                    <div class="shopdetailhobby">
                        <button type="submit" >趣味・レジャー</button>
                    </div>
                    <div class="shopdetailhobbyshopexplain">
                        <div class="form-group mt-2">
                            {{$shopliststock->shop_explain}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_postal">郵便番号　　　　　</label>
                            {{$shopliststock->shop_postal}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_phone">電話番号　　　　　</label>
                            {{$shopliststock->shop_phone}}
                        </div> 
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_fax">住所　　　　　　　</label>
                            {{$shopliststock->shop_fax}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_hour">営業時間　　　　　</label>
                            {{$shopliststock->shop_hour}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_dayoff">定休日　　　　　　</label>
                            {{$shopliststock->shop_dayoff}}
                        </div>
                        
                    </div>
                    
                </div>
                
                    
            </div>
            @csrf
            
            <div class="iphoneitem">
                <div class="iphoneshopphoto"　flex-grow>
                    <p><div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div></p>
                    
                </div>
                <div class="iphoneshopdetail">
                    <div class="shopdetailhobby">
                        <button type="submit" >趣味・レジャー</button>
                    </div>
                    <div class="shopdetailhobbyshopexplain">
                        <div class="form-group mt-2">
                            {{$shopliststock->shop_explain}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_postal">郵便番号　　　　　</label>
                            {{$shopliststock->shop_postal}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_phone">電話番号　　　　　</label>
                            {{$shopliststock->shop_phone}}
                        </div> 
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_fax">住所　　　　　　　</label>
                            {{$shopliststock->shop_fax}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_hour">営業時間　　　　　</label>
                            {{$shopliststock->shop_hour}}
                        </div>
                        
                    </div>
                    <div class="shopdetailhobbycategory">
                        <div class="form-group mt-2">
                            <label for="shop_dayoff">定休日　　　　　　</label>
                            {{$shopliststock->shop_dayoff}}
                        </div>
                        
                    </div>
                    
                </div>
                
                    
            </div>
            @csrf
            
                <p></p>
                <div align="center" class= "shopdetailhobbyback">
                    <form action="{{ url('hobbys/') }}" method="GET">
                        <button type="submit" class="btn btn-primary">一覧に戻る</button>    
                    </form>
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









