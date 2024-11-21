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
                    　<a href="{{ url('furnituregoods/')}}" method="GET">
                    　<p>STORE<br>
                    店舗一覧</p>
                    　</a>
                    </li>
            　   </ul>
　　        </nav>
    </header>
    <main>
        <div class="shopnamelist">
                <p>店舗一覧</p>
        </div>
        <div class="shoplistwhole">
            <div class="card_body">
                <table class="shop_category">
                    <thead>
                        <th class="all">
                            <form action="{{ url('alls/') }}" method="GET"> 
                                <button type="submit" >すべて</button>
                            </form>    
                        </th>
                        <th class="drinkeat">
                            <form action="{{ url('furnituregoods/') }}" method="GET"> 
                                <button type="submit" >食べる・飲む</button>
                            </form>    
                        </th>
                        <th>
                        <th class="FoodBeverages">
                            <form action="{{ url('foodbeverages/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">食料品・飲料</button>
                            </form>   
                        </th>
                        <th>
                        <th class="fashion">
                            <form action="{{ url('fashionables/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">おしゃれ</button>
                            </form>
                        </th>
                        <th>
                        <th class="lifestyle">
                            <form action="{{ url('lifestyles/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">暮らし</button>
                            </form>
                        </th>
                        <th>
                        <th class="beauty">
                            <form action="{{ url('beauties/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">美容・利用・エステ</button>
                            </form>
                        </th>
                        
                        <th class="hobby">
                            <form action="{{ url('hobbys/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">趣味・レジャー</button>
                            </form>   
                        </th>
                        <th class="medical">
                            <form action="{{ url('medicals/') }}" method="GET"> 
                                <button type="submit" class="btn btn-primary">医療・健康</button>
                            </form>   
                        </th>
                     </thead>
                </table>
                <table class="iphoneshop_category">
                    <thead>
                        <tr>
                            <td class="all">
                                <form action="{{ url('alls/') }}" method="GET"> 
                                    <button type="submit" >すべて</button>
                                </form>    
                            </td>
                            <td class="drinkeat">
                                <form action="{{ url('furnituregoods/') }}" method="GET"> 
                                    <button type="submit" >食べる・飲む</button>
                                </form>    
                            </td>
                            <td class="FoodBeverages">
                                <form action="{{ url('foodbeverages/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">食料品・飲料</button>
                                </form>   
                            </td>
                            <td class="fashion">
                                <form action="{{ url('fashionables/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">おしゃれ</button>
                                </form>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="lifestyle">
                                <form action="{{ url('lifestyles/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">暮らし</button>
                                </form>
                            </td>
                            <td class="beauty">
                                <form action="{{ url('beauties/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">美容・利用・エステ</button>
                                </form>
                            </td>
                            
                            <td class="hobby">
                                <form action="{{ url('hobbys/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">趣味・レジャー</button>
                                </form>   
                            </td>
                            <td class="medical">
                                <form action="{{ url('medicals/') }}" method="GET"> 
                                    <button type="submit" class="btn btn-primary">医療・健康</button>
                                </form>   
                            </td>
                        </tr>
                     </thead>
                </table>
            </div>
            @auth
                <div class="ml-auto"> 
                     <form action="{{ url('hobbysCreate/') }}" method="GET"> 
                        <button class="newshop bn23"type="submit" class="btn btn-primary">新規登録</button>
                    </form>
                </div>
            @endauth
            <div class="item-container">
                    @foreach($shopliststocks as $shopliststock)
                        <a href="{{ url('hobbydetail/' .$shopliststock->id) }}" class="hobbyitem text-decoration-none" >
                                <div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div>
                                <p></p>
                                <p class="hobbycategory">{{$shopliststock->shop_category}}</p>
                                <p class="shop_name">{{$shopliststock->shop_name}}</p>  
                                <p class="shop_summary">{{$shopliststock->shop_explain}}</p>
                                <div class="shop_revise_hobby">
                                    <form action="{{ url('hobbyupdate/' .$shopliststock->id) }}" method="GET">
                                    @csrf
                                        <p><button type="submit" class="btn btn-primary">更新</button></p>
                                    </form> 
                                    <form action="{{ url('shoplistdelete/' . $shopliststock->id) }}" method="POST"
                                      onclick="return window.confirm('削除してもよろしいですか？');">
                                      @csrf
                                      <p><button type="submit" class="btn btn-danger">削除</button></p>
                                    </form>
                                </div>
                        </a>
                    @endforeach
            
                <div class="row">
                    <div class="col-mb-4 offset-md-5"> 
                        {{ $shopliststocks->links() }} 
                    </div> 
                </div>
            </div>
            
            <div class="iphoneitem-container">
                    @foreach($shopliststocks as $shopliststock)
                        <a href="{{ url('hobbydetail/' .$shopliststock->id) }}" class="hobbyitem text-decoration-none" >
                                <div><img src="{{ asset('storage/images/'.$shopliststock->shop_img)}}" alt=""></div>
                                <p></p>
                                <p class="hobbycategory">{{$shopliststock->shop_category}}</p>
                                <p class="shop_name">{{$shopliststock->shop_name}}</p>  
                                <p class="shop_summary">{{$shopliststock->shop_explain}}</p>
                                <div class="shop_revise_hobby">
                                    <form action="{{ url('hobbyupdate/' .$shopliststock->id) }}" method="GET">
                                    @csrf
                                        <p><button type="submit" class="btn btn-primary">更新</button></p>
                                    </form> 
                                    <form action="{{ url('shoplistdelete/' . $shopliststock->id) }}" method="POST"
                                      onclick="return window.confirm('削除してもよろしいですか？');">
                                      @csrf
                                      <p><button type="submit" class="btn btn-danger">削除</button></p>
                                    </form>
                                </div>
                        </a>
                    @endforeach
            
                <div class="row">
                    <div class="col-mb-4 offset-md-5"> 
                        {{ $shopliststocks->links() }} 
                    </div> 
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









