<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopListStock;
use Illuminate\Foundation\Http\FormRequest;
use Validator;
class ShopUpdateController extends Controller
{
    //■■■■■■「食べる・飲む」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    public function eatdrinkview($id) {
       
       //Booksedit画面に遷移する
       return view('eatdrinkupdate', ['id' => $id]);
    }
    
    
    
    
    
    
    //■■■■■■「食料品・飲料」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「食料品・飲料」の更新画面表示
    public function foodbeverageview($id) {
       
       //Booksedit画面に遷移する
       return view('foodbeverageupdate', ['id' => $id]);
    }
    
    //■■■■■■「おしゃれ」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「おしゃれ」の更新画面表示
    public function fashionableview($id) {
       
       //Booksedit画面に遷移する
       return view('fashionableupdate', ['id' => $id]);
    }
    
    
    //■■■■■■「暮らし」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「暮らし」の更新画面表示
    public function lifestyleview($id) {
       
       //Booksedit画面に遷移する
       return view('lifestyleupdate', ['id' => $id]);
    }
    
    
    
    
    //■■■■■■「美容・利用・エステ」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「美容・利用・エステ」の更新画面表示
    public function beautyview($id) {
       
       //beautyupdate更新画面に遷移する
       return view('beautyupdate', ['id' => $id]);
    }
    
    
    //■■■■■■「趣味・レジャー」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「趣味・レジャー」の更新画面表示
    public function hobbyview($id) {
       
       //hobbyupdate画面に遷移する
       return view('hobbyupdate', ['id' => $id]);
    }
    
    
    //■■■■■■「医療・健康」の設定内容■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
    //「医療・健康」の更新画面表示
    public function medicalview($id) {
       
       //medicalupdate画面に遷移する
       return view('medicalupdate', ['id' => $id]);
    }
    
    
    //店舗一覧の更新処理
    public function shoplistupdate(Request $request)
    {
         $validator = Validator::make($request->all(),[
             'shop_name' => 'required|max:100'
            ,'shop_category_id' => 'required|max:99'
            ,'shop_summary' => 'required|max:50'
            ,'shop_explain' => 'required|max:300'
            ,'shop_postal' => 'required|max:49|min:0'
            ,'shop_phone' => 'required|max:49|min:0'
            ,'shop_fax' => 'required|max:49|min:0'
            ,'shop_hour' => 'required|max:49|min:0'
            ,'shop_dayoff' => 'required|max:49|min:0'
            ,'shop_img' => 'required|max:200'
            
        ]);
        
        // エラーの場合       
        if($validator->fails()){
            // エラー画面にエラーを表示する
            return back()->withInput()->withErrors($validator);       
        }
        $shopliststock = new ShopListStock; 
        $shopliststock ->Shopupdate($request);
        
        //食料品・飲料の店舗一覧画面に遷移する
        if($request->shop_category_id == 1) {
            return redirect('foodbeverages');
        
        }
        
        //食べる・飲むの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 2) {
            return redirect('furnituregoods/');
        }
        
        
        
        //おしゃれの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 3) {
            return redirect('fashionables');
        
        }
        
        //暮らしの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 4) {
            return redirect('lifestyles');
        
        }
        //趣味・レジャーの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 5) {
            return redirect('hobbys');
        }
        
        //美容・理容・エステの店舗一覧画面に遷移する
        elseif($request->shop_category_id == 6) {
            return redirect('beauties');
        
        }
        
        
        //医療・健康の店舗一覧画面に遷移する
        elseif($request->shop_category_id == 7) {
            return redirect('medicals');
        }

    }
    
    
     // 食べる・飲むの店舗削除処理実行
    public function shoplistdelete($id){
 
        // ShopListStockモデルのインスタンス化
        $shopliststock = new ShopListStock;
        $shopliststocks = ShopListStock::find($id);
        // shopliststockテーブルの該当レコードを削除する       
        
        //食料品・飲料の店舗一覧画面に遷移する
        if($shopliststocks->shop_category_id == 1) {
            $shopliststock->Shopdelete($id);
            return redirect('foodbeverages/');
        }

        //食べる・飲むの店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 2) {
            $shopliststock->Shopdelete($id);
            return redirect('furnituregoods/');
        }
        
        
        //おしゃれの店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 3) {
            $shopliststock->Shopdelete($id);
            return redirect('fashionables/');
        }
        
        //暮らしの店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 4) {
            $shopliststock->Shopdelete($id);
            return redirect('lifestyles/');
        }
        
        //趣味・レジャーの店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 5) {
            $shopliststock->Shopdelete($id);
            return redirect('hobbys/');
        }
        
        //美容・理容・エステの店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 6) {
            $shopliststock->Shopdelete($id);
            return redirect('beauties/');
        }
        
        
        
        //医療・健康の店舗一覧画面に遷移する
        elseif($shopliststocks->shop_category_id == 7) {
            $shopliststock->Shopdelete($id);
            return redirect('medicals/');
        }
    }
}
