@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header> 
        <h1>立花商店街サイト</h1>
    </header>
    <main>
        <div class="card-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>ホーム</th>
                    <th>
                        <form action="{{ url('furnituregoods/') }}" method="GET"> 
                            <button type="submit" class="btn btn-primary">家具</button>
                        </form>    
                    </th>
                    <th>オフィス</th>
                    <th>ファッション</th>
                    <th>化粧品</th>
                    <th>ブック</th>
                 </thead>
            </table>
        </div>
        <div class="ml-auto"> 
             <form action="{{ url('furnituregoodsCreate/') }}" method="GET"> 
                <button type="submit" eclass="btn btn-primary">新規登録</button> 
            </form>
        </div>
        <div class="item-container">
                @foreach($furniturestocks as $furniturestock)
                    <div class="item">
                        <p>{{$furniturestock->item_name}}<br>{{$furniturestock->item_amount}}円</p>    
                            
                            <p><div><img src="{{ asset('storage/images/'.$furniturestock->item_img)}}" alt=""></div></p>
                            <p>{{$furniturestock->item_explain}}</p>
                            <p><button type="submit" class="btn btn-primary">更新</button></p>
                            <p><button type="submit" class="btn btn-danger">削除</button></p>
                    </div>
                @endforeach
                    <div class="row">
                        <div class="col-mb-4 offset-md-5"> 
                            {{ $furniturestocks->links() }} 
                        </div> 
                    </div>
        </div>
        
    </main>
    <footer>
    	&copy; 2020 XXXX
    </footer>
</body>
</html>
@endsection









