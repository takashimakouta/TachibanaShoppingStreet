<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeautyStock extends Model
{
    use HasFactory;
     protected $guarded = [
     'id'
    ];
    protected $table = 'beautystocks';
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
        
        return BeautyStock::orderBy('created_at','asc')->simplePaginate(9);
    }
    
    
    //店舗を新規で登録する
    public function beautiesStore($request)
    {
        // BeautyStocksクラスのインスタンス化
        $beautystocks = new BeautyStock;
        $beautystocks->shop_name = $request->shop_name;
        $beautystocks->shop_category = $request->shop_category;
        $beautystocks->shop_summary = $request->shop_summary;
        $beautystocks->shop_explain = $request->shop_explain;
        $beautystocks->shop_postal = $request->shop_postal;
        $beautystocks->shop_phone = $request->shop_phone;
        $beautystocks->shop_fax = $request->shop_fax;
        $beautystocks->shop_hour = $request->shop_hour;
        $beautystocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $beautystocks->shop_img = $shop_name;
        $beautystocks->save();
        
    }
    
    
 //くらしの店舗更新処理
    public function updateBeauties($request)
    {
        
        $beautystocks = new BeautyStock; 
        $beautystocks = BeautyStock::find($request->id);
        
        $beautystocks->fill([
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
        $beautystocks->shop_img = $shop_name;
        
        $beautystocks->update();
    }
    
    // BeautyStockテーブルのレコードを削除する
 public function deleteBeauties($id){
    BeautyStock::where('id',$id)->delete();
 }
}
