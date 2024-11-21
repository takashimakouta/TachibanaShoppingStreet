<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\FurnitureStock;
use App\Models\FoodBeverageStock;
use App\Models\FashionableStock;
use App\Models\LifestyleStock;
use App\Models\BeautyStock;
use App\Models\HobbyStock;
use App\Models\MedicalStock;
use App\Models\ShopListStock;
use App\Models\ShopCategory;
use Illuminate\Foundation\Http\FormRequest;
use Validator;
class AllController extends Controller
{   
    //店舗一覧トップ画面表示
    public function shoplisttopview(ShopListStock $shopliststock) {
        // TODO: ここにfoodbeverageへの遷移コード
        $shopliststocks = $shopliststock->shoplisttopstockDisplay();
        return view('shoplisttop',compact('shopliststocks',));
    }
    
    
    
    //「食料品・飲料～医療・健康」登録画面表示
    public function allview() {
        // TODO: ここにfoodbeverageへの遷移コード
        $shopliststock = new ShopListStock;
        $shopliststocks = $shopliststock->shopcategoryDisplay();
        return view('alls',compact('shopliststocks'));
    }
    

    
    
    //■■■■■■「食べる・飲む」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「食べる・飲む」登録画面表示
    public function eatdrinkview(ShopListStock $shopliststock) {
        // TODO: ここにfurnituregoodsへの遷移コード
        $shopliststocks = $shopliststock->eatdrinkstockDisplay();
        return view('furnituregoods',compact('shopliststocks'));
        
    }
    
    //店舗一覧から「食べる・飲む」店舗登録画面に遷移
    public function furnituregoodsCreate(){
        return view('furnituregoodsCreate');
    }
    
    
    //■■■■■■「食料品・飲料」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「食料品・飲料」登録画面表示
    public function foodbeverageview(ShopListStock $shopliststock) {
        // TODO: ここにfoodbeverageへの遷移コード
        $shopliststocks = $shopliststock->foodbeveragestockDisplay();
        
        return view('foodbeverages',compact('shopliststocks'));
    }
    
    //店舗一覧から「食料品・飲料」店舗登録画面に遷移
    public function foodbeveragesCreate(){
        return view('foodbeveragesCreate');
    }
    
    
    //■■■■■■「おしゃれ」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「おしゃれ」登録画面表示
    public function fashionableview(ShopListStock $shopliststock) {
        // TODO: ここにfashionableへの遷移コード
        $shopliststocks = $shopliststock->fashionablestockDisplay();
        return view('fashionables',compact('shopliststocks'));
    }
    
    //店舗一覧から「おしゃれ」店舗登録画面に遷移
    public function fashionablesCreate(){
        return view('fashionablesCreate');
    }
    
    
    //■■■■■■「暮らし」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「暮らし」登録画面表示
    public function lifestyleview(ShopListStock $shopliststock) {
        // TODO: ここにlifestyleへの遷移コード
        $shopliststocks = $shopliststock->lifestylestockDisplay();
        return view('lifestyles',compact('shopliststocks'));
    }
    
    
    //店舗一覧から「暮らし」店舗登録画面に遷移
    public function lifestylesCreate(){
        return view('lifestylesCreate');
    }
    
    
    //■■■■■■「美容」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「美容」登録画面表示
    public function beautyview(ShopListStock $shopliststock) {
        // TODO: ここにbeautyへの遷移コード
        $shopliststocks = $shopliststock->beautystockDisplay();
        return view('beauties',compact('shopliststocks'));
    }
    
    
    //店舗一覧から「美容」店舗登録画面に遷移
    public function beautiesCreate(){
        return view('beautiesCreate');
    }
    
    
    //■■■■■■「趣味・レジャー」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「趣味・レジャー」登録画面表示
    public function hobbyview(ShopListStock $shopliststock) {
        // TODO: ここにbeautyへの遷移コード
        $shopliststocks = $shopliststock->hobbystockDisplay();
        return view('hobbys',compact('shopliststocks'));
    }
    
    
    //店舗一覧から「趣味・レジャー」店舗登録画面に遷移
    public function hobbysCreate(){
        return view('hobbysCreate');
    }
    
    
    //■■■■■■「医療・健康」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「医療・健康」登録画面表示
    public function medicalview(ShopListStock $shopliststock) {
        // TODO: ここにbeautyへの遷移コード
        $shopliststocks = $shopliststock->medicalstockDisplay();
        return view('medicals',compact('shopliststocks'));
    }
    
    
    //店舗一覧から「医療・健康」店舗登録画面に遷移
    public function medicalsCreate(){
        return view('medicalsCreate');
    }
    
    
    
     //■■■■■■店舗一覧に店舗を新規で登録■■■■■■■■■■■■■■//
    public function shoplistStore(Request $request)
    {
    
        $validator = Validator::make($request->all(),[
             'shop_name' => 'required|max:100'
            ,'shop_category_id' => 'required|max:99'
            ,'shop_explain' => 'required|max:300'
            ,'shop_postal' => 'required|max:20'
            ,'shop_phone' => 'required|max:20'
            ,'shop_fax' => 'required|max:50'
            ,'shop_hour' => 'required|max:30'
            ,'shop_dayoff' => 'required|max:20'
            ,'shop_img' => 'required|max:200'
        ]);
 
        // エラーの場合       
        if($validator->fails()){
            // エラー画面にエラーを表示する
            return back()->withInput()->withErrors($validator);       
        }
        
        //店舗の登録
        $shopliststocks = new ShopListStock;
        $shopliststocks->shopstore($request);
        
        //食べる・飲むの店舗一覧画面に遷移する
        
        
        //食料品・飲料の店舗一覧画面に遷移する
        if($request->shop_category_id == 1) {
            return redirect('foodbeverages')->with('message','店舗の投稿が完了しました');
        
        }
        
        //食べる・飲むの店舗一覧画面に遷移する
        if($request->shop_category_id == 2) {
            return redirect('furnituregoods')->with('message','店舗の投稿が完了しました');
        
        }
        
        //おしゃれの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 3) {
            return redirect('fashionables')->with('message','店舗の投稿が完了しました');
        
        }
        
        //暮らしの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 4) {
            return redirect('lifestyles')->with('message','店舗の投稿が完了しました');
        
        }
        
        //趣味・レジャーの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 5) {
            return redirect('hobbys')->with('message','店舗の投稿が完了しました');
        }
        
        //美容・理容・エステの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 6) {
            return redirect('beauties')->with('message','店舗の投稿が完了しました');
        
        }
        
        
        
        //医療・健康の店舗一覧画面に遷移する
        elseif($request->shop_category_id == 7) {
            return redirect('medicals')->with('message','店舗の投稿が完了しました');
        }
    }
    
    
}

