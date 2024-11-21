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
        <h1>TACHIBANA SHOPS STREET</h1>
            <nav>
                 <ul style="list-style: none;">
                    <li class= "shopdetailheaderlink">
                    　<a href="{{ url('alls/')}}" method="GET">
                    　<p>STORE<br>
                    店舗一覧</p>
                    　</a>
                    </li>
                    <li class= "shopdetailheaderlink">
                    　<a href="{{ url('alls/')}}" method="GET">
                    　<p>HOME<br>
                    ホーム</p>
                    　</a>
                    </li>
            　   </ul>
　　        </nav>
    </header>
    <main>
        <section id="tachibanashopstreetcollege">
            <h1>立花商店街大学</h1>
                <div class="tachibanashopstreetcollegeexplain">
                    <ul>
                        <li>立花商店街の身近な店主が講師となり、</li>
                        <li>普段は一部の常連さんにだけに教えている</li>
                        <li>買い物のコツから専門的な知識や裏話、</li>
                        <li>親身なアドバイスなどを体験して学べる学校です。</li>
                        <li>お客さんとお店で一緒に「買い物のプロ」を目指しましょう</li>
                    </ul>
                </div>
                <div class="tachibanashopstreetcollegephoto">
                    <picture>
                        <img src="../../../images/home/home_college.png" alt="立花商店街大学ホーム写真">  
                    </picture>
                </div>
        </section>
        
        <section id="tachibanashopstreetcollegetheme">
            <div class="tachibanashopstreetcollegethemesummary">
                <h3>本当に美味しいお米の真実</h3>
                <ul>
                    <li>講師：梯米穀店</li>
                    <li>2013年10月26日(土)</li>
                    <li>教室：梯米穀店前</li>
                </ul>
                
                <img src="./images/favorite_04correction.png"
                     alt="フットサルの写真">
                </img>
            </div>
            
            <div class="tachibanashopstreetcollegethemesummary">
                <h3>プリントが楽しくなる！スマホカメラの写真教室</h3>
                <ul>
                    <li>講師：みどりカメラ</li>
                    <li>2013年11月9日(土)</li>
                    <li>教室：三井住友銀行前</li>
                </ul>
                
                <img src="./images/favorite_04correction.png"
                     alt="フットサルの写真">
                </img>
            </div>
            
            <div class="tachibanashopstreetcollegethemesummary">
                <h3>お家で作れる！おせち料理</h3>
                <ul>
                    <li>講師：フードショップアコー</li>
                    <li>2013年11月24日(日)</li>
                    <li>教室：フードショップアコー前</li>
                </ul>
                
                <img src="./images/favorite_04correction.png"
                     alt="フットサルの写真">
                </img>
            </div>
            
            <div class="tachibanashopstreetcollegethemesummary">
                <h3>自分で出来る！エビちゃんメイク</h3>
                    <ul>
                        <li>講師：ハリマ堂化化粧店</li>
                        <li>2014年1月30日(木)</li>
                        <li>教室：ハリマ堂化化粧店</li>
                    </ul>
                
                <img src="./images/favorite_04correction.png"
                     alt="フットサルの写真">
                </img>
            </div>
        </section>
        
        <section id="tachibanashopstreetcollegerequest">
                <h3>申し込み方法</h3>
                    <p>立花商店街振興組合事務局</p>
                    <p>電話 06-6427-6525へお申込みをお願いいたします</p>
            </div>
        </section>
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









