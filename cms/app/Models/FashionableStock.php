<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FashionableStock extends Model
{
    
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'fashionablestocks';
    protected $fillable = [
        'shop_name',
        'shop_category',
        'shop_summary',
        'shop_explain',
        'shop_postal',
        'shop_phone',
        'shop_fax',
        'shop_hour',
        'shop_dayoff',
        'shop_img',
    ];
    
    public function stockDisplay()
    {
        
        return FashionableStock::orderBy('created_at','asc')->simplePaginate(9);
    }
    
    
    //店舗を新規で登録する
    public function fashionablesStore($request)
    {
        // FashionableStocksクラスのインスタンス化
        $fashionablestocks = new FashionableStock;
        $fashionablestocks->shop_name = $request->shop_name;
        $fashionablestocks->shop_category = $request->shop_category;
        $fashionablestocks->shop_summary = $request->shop_summary;
        $fashionablestocks->shop_explain = $request->shop_explain;
        $fashionablestocks->shop_postal = $request->shop_postal;
        $fashionablestocks->shop_phone = $request->shop_phone;
        $fashionablestocks->shop_fax = $request->shop_fax;
        $fashionablestocks->shop_hour = $request->shop_hour;
        $fashionablestocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $fashionablestocks->shop_img = $shop_name;
        $fashionablestocks->save();
        
    }
    
    
 //おしゃれの店舗更新処理
    public function updateFashionables($request)
    {
        
        $fashionablestocks = new FashionableStock; 
        $fashionablestocks = FashionableStock::find($request->id);
        
        $fashionablestocks->fill([
            'id' => $request->id,
            'shop_name' => $request->shop_name,
            'shop_category' => $request->shop_category,
            'shop_summary' => $request->shop_summary,
            'shop_explain' => $request->shop_explain,
            'shop_postal' => $request->shop_postal,
            'shop_phone' => $request->shop_phone,
            'shop_fax' => $request->shop_fax,
            'shop_hour' => $request->shop_hour,
            'shop_dayoff' => $request->shop_dayoff,
            'shop_img' => $request->shop_img,
        ]);
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $fashionablestocks->shop_img = $shop_name;
        
        $fashionablestocks->update();
    }
    
    // FunitureStockテーブルのレコードを削除する
 public function deleteFashionables($id){
    FashionableStock::where('id',$id)->delete();
 }
}
