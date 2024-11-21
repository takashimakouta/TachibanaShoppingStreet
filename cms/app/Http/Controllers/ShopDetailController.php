<?php

namespace App\Http\Controllers;
use App\Models\ShopListStock;
use Illuminate\Http\Request;
use Validator;
class ShopDetailController extends Controller
{
    //「食べる・飲む」の店舗詳細表示
    public function eatdrinkview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('eatdrink', ['shopliststock' => $shopliststock]);
    }
    //「食料品・飲料」の店舗詳細表示
    public function foodbeverageview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('foodbeveragedetail', ['shopliststock' => $shopliststock]);
    }
    
    
    
    //「おしゃれ」の店舗詳細表示
    public function fashionableview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('fashionabledetail', ['shopliststock' => $shopliststock]);
    }
    
    
    //「暮らし」の店舗詳細表示
    public function lifestyleview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('lifestyledetail', ['shopliststock' => $shopliststock]);
    }
    
    //「美容・理容・エステ」の店舗詳細表示
    public function beautyview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('beautydetail', ['shopliststock' => $shopliststock]);
    }
    
    
    //「趣味・レジャー」の店舗詳細表示
    public function hobbyview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('hobbydetail', ['shopliststock' => $shopliststock]);
    }
    
    
    
    //「医療・健康」の店舗詳細表示
    public function medicalview($id) {
       //店舗一覧画面に遷移する
    $shopliststock = new ShopListStock;
    $shopliststock =ShopListStock::find($id);   
   return view('medicaldetail', ['shopliststock' => $shopliststock]);
    }
}
