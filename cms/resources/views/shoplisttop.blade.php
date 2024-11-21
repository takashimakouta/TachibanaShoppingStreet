@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    　<a href="{{ url('alls/')}}" method="GET">
                    　<p>STORE<br>
                    店舗一覧</p>
                    　</a>
                    </li>
            　   </ul>
　　        </nav>
    </header>
    <main>
        <div class="shoplisttopimage">
            <div class="shoplisttoptitle">
                <h2>たちばな</h2>
                <h2>商店街</h2>
                <p>TACHIBANA STORE</p>
            </div>
            <div class="shoplisttopicon">
                <picture>
                    <img src="../../../images/home/shoplisttopicon.png" alt="店舗一覧トップアイコン">
                </picture>
            </div>
         </div>
        <div class="iphoneshoplisttopimage"> 
            <div class="iphoneshoplisttoptitle">
                <h2>たちばな</h2>
                <h2>商店街</h2>
                <p>TACHIBANA STORE</p>
            </div>
            <div class="iphoneshoplisttopicon">
                <picture>
                    <img src="../../../images/home/shoplisttopicon.png" alt="店舗一覧トップアイコン">
                </picture>
            </div>
        </div>
        <div class="shoplisttopcoment">
            <p>
                たくさんのお店が、<br>あなたをお待ちしています！
            </p>
        </div>
        <div class="iphoneshoplisttopcoment">
            <p>
                たくさんのお店が、<br>あなたをお待ちしています！
            </p>
        </div>
        <div class="shoplistwhole">
            <div class="card_body">
                <table class="shop_category">
                </table>
            </div>
            <div class="item-container">
                    @foreach($shopliststocks as $shopliststock)
                    
                            @if($shopliststock->shop_category == '食べる・飲む') 
                                @php
                                    $shopitem = 'eatdrinkitem';
                                    $shopitemcategory = 'eatdrinkcategory';
                                @endphp
        	                    
                            @endif
                            
                            @if($shopliststock->shop_category == '食料品・飲料')
                                @php
                                    $shopitem = 'foodbeverageitem';
                                    $shopitemcategory = 'foodbeveragecategory';
                                @endphp
                                    
                            @endif
                            
                            @if($shopliststock->shop_category == 'おしゃれ') 
                                @php
                                    $shopitem = 'fashionableitem';
                                    $shopitemcategory = 'fashionablecategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '暮らし') 
            	                @php
                                    $shopitem = 'lifestyleitem';
                                    $shopitemcategory = 'lifestylecategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '美容・理容・エステ') 
                                @php
                                    $shopitem = 'beautyitem';
                                    $shopitemcategory = 'beautycategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '趣味・レジャー') 
            	                @php
                                    $shopitem = 'hobbyitem';
                                    $shopitemcategory = 'hobbycategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '医療・健康') 
            	                @php
                                    $shopitem = 'medicalitem';
                                    $shopitemcategory = 'medicalcategory';
                                @endphp
                            @endif
                            
                            
                            <a href="{{ url('eatdrink/' .$shopliststock->id) }}" class={{$shopitem}}>
        	                        <div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div>
                                    <p></p>
                                    <p class={{$shopitemcategory}}>{{$shopliststock->shop_category}}</p>
                                    <p class="shop_name">{{$shopliststock->shop_name}}</p>  
                                    <p class="shop_summary">{{$shopliststock->shop_explain}}</p>
                            </a>
                    @endforeach
            </div>
            
            <div class="iphoneitem-container">
                    @foreach($shopliststocks as $shopliststock)
                    
                        @if($shopliststock->shop_category == '食べる・飲む') 
                                @php
                                    $shopitem = 'eatdrinkitem';
                                    $shopitemcategory = 'eatdrinkcategory';
                                @endphp
        	                    
                            @endif
                            
                            @if($shopliststock->shop_category == '食料品・飲料')
                                @php
                                    $shopitem = 'foodbeverageitem';
                                    $shopitemcategory = 'foodbeveragecategory';
                                @endphp
                                    
                            @endif
                            
                            @if($shopliststock->shop_category == 'おしゃれ') 
                                @php
                                    $shopitem = 'fashionableitem';
                                    $shopitemcategory = 'fashionablecategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '暮らし') 
            	                @php
                                    $shopitem = 'lifestyleitem';
                                    $shopitemcategory = 'lifestylecategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '美容・理容・エステ') 
                                @php
                                    $shopitem = 'beautyitem';
                                    $shopitemcategory = 'beautycategory';
                                @endphp
                            @endif
                            @if($shopliststock->shop_category == '趣味・レジャー') 
            	                @php
                                    $shopitem = 'hobbyitem';
                                    $shopitemcategory = 'hobbycategory';
                                @endphp
                            @endif
                            
                            @if($shopliststock->shop_category == '医療・健康') 
            	                @php
                                    $shopitem = 'medicalitem';
                                    $shopitemcategory = 'medicalcategory';
                                @endphp
                            
                        
                            @endif
                            
                            <a href="{{ url('eatdrink/' .$shopliststock->id) }}" class={{$shopitem}}>
        	                        <div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div>
                                    <p></p>
                                    <p class={{$shopitemcategory}}>{{$shopliststock->shop_category}}</p>
                                    <p class="shop_name">{{$shopliststock->shop_name}}</p>  
                                    <p class="shop_summary">{{$shopliststock->shop_explain}}</p>
                            </a>
                    @endforeach
            </div>
            <div class="shoplisttrasition">
                <form action="{{ url('alls/') }}" method="GET"> 
                    <button type="submit" class="btn btn-primary">店舗一覧へ</button>
                </form> 
            </div>
            
            <div id="map" style="height:500px">
                <script src="{{ asset('/js/result.js') }}"></script> 
                <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyArPo7NuPOQtLVOIeedMHjkF-yDu2OvpBo&callback=initMap" async defer>
	            </script>
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
</body>
</html>
@endsection









