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
<header>
    <h1><a href="/"  method="GET" target="_self"><img src="../../../images/home/logo.png" alt="立花商店街"></a>
    </h1>
    <h1>立花商店街</h1>
        <nav class="PClogoArea">
             <ul style="list-style: none;">
                <li class="category">
                  <a href="/"  method="GET">
                    ホーム
                  </a>
                </li>
                <li class="category">
                　<a  href="shoplisttop" method="GET">
                　  店舗一覧  
                　</a>
                </li>
                    
                <li class="category">
                 <a href="https://www.youtube.com/">
                    新着情報
                 </a>
                </li>
                    
                <li class="category">
                 <a href="https://www.youtube.com/">
                 立花商店街大学
                 </a>
                </li>
                    
                <li class="category">
                 <a href="https://www.youtube.com/">
                 お問い合わせ
                 </a>
                </li>
                
                <li>
                 <a href="https://www.facebook.com/tachibanass?ref=embed_page" class="btn-social-icon-facebook">
                  <span class="btn-social-icon-facebook__square"><div class="fa fa-facebook">f</div></span> Follow Me
                 </a>
                </li>
                
        　   </ul>
　　    </nav>
</header>
<main>
    <section id="home">
        <div class="home_description">
        </div>
        <div class="home_college_topic">
            <div class="home_college_description">
                <h2>立花商店街大学</h2>
                <p>
                講師は立花商店街の店主。<br>
                普段は常連さんにだけに教えている買い物や、商品の裏話を聞くチャンス！
                </p>
                <p>詳しくはこちら</p>
            </div>
            <div class="home_college_photo">
                <picture>
                <img src="../../../images/home/home_college.png" alt="立花商店街大学ホーム写真">  
                </picture>
                
            </div> 
        </div>
    </section>
    
    <section id="news">
       <h2>立花ニュース</h2>
       <div class="news_topic">
           <div class="news_movie">
               <iframe width="760" height="515" src="https://www.youtube.com/embed/UVorHrA-eXI?si=_7ybNia-ySWFsWa5" 
               title="YouTube video player" frameborder="0" 
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </iframe>
           </div>
           <div class="news_description">
               <p><font size="7">第38回立花子供夏回りを開催しました</font><br>
               <p><font size="6">ご来場ありがとうございました</p>
               <p><font size="6">場所：立花商店街</p>
           </div>
       </div>
    </section>
    
    <section id="information">
         <p></p>
        <h2>INFORMAITON</h2>
        <ul>
            <li>2023/11/29   理事長就任のご挨拶</li>
            <li>2022/11/22　 12/2(金)～12/6(火)　立花商店街・コープ立花・立花ショッピングセンター街 合同歳末大売出し！</li>
            <li>2022/08/12  「第41回 立花子ども夏まつり」</li>
            <li>2020/11/20   12/4(金)～12/8(火)　立花商店街・コープ立花・立花ショッピング街 合同歳末大売出し！</li>
            <li>2020/06/15   6月19日(金)プレミアム商品券「りっぱな券」を販売します！</li>
        </ul>
        
        <p>すべてのお知らせを見る</p>
    </section>
    
</main>
<footer>
        <div class="PCfooterlogo">
          <ul class="footermenu" style="list-style: none;">
              <li>
                  <a href="/"  method="GET">ホーム</a>
              </li>
              <li>
                  <a href="furnituregoods" method="GET">店舗一覧</a>
              </li>
              <li>
                  <a href="furnituregoods" method="GET">新着情報</a>
              </li>
              <li>
                  <a href="furnituregoods" method="GET">立花商店街大学</a>
              </li>
              <li>
                  <a href="furnituregoods" method="GET">お問い合わせ</a>
              </li>
              <li>
                 <a href="https://www.facebook.com/tachibanass?ref=embed_page" class="btn-social-icon-facebook">
                  <span class="btn-social-icon-facebook__square"><div class="fa fa-facebook">f</div></span> Follow Me
                 </a>
              </li>
          </ul>
          <p class="copyright">
    	      &copy; Copyright 立花商店街 All rights reserved.
    	  </p>
    	  
    	  
    	</div>
</footer>
</body>
</html>
@endsection
