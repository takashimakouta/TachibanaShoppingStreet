<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobbyStock extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'hobbystocks';
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
        
        return HobbyStock::orderBy('created_at','asc')->simplePaginate(9);
    }
    
    
    //店舗を新規で登録する
    public function hobbysStore($request)
    {
        // FashionableStocksクラスのインスタンス化
        $hobbystocks = new HobbyStock;
        $hobbystocks->shop_name = $request->shop_name;
        $hobbystocks->shop_category = $request->shop_category;
        $hobbystocks->shop_summary = $request->shop_summary;
        $hobbystocks->shop_explain = $request->shop_explain;
        $hobbystocks->shop_postal = $request->shop_postal;
        $hobbystocks->shop_phone = $request->shop_phone;
        $hobbystocks->shop_fax = $request->shop_fax;
        $hobbystocks->shop_hour = $request->shop_hour;
        $hobbystocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $hobbystocks->shop_img = $shop_name;
        $hobbystocks->save();
        
    }
    
    
 //おしゃれの店舗更新処理
    public function updateHobbys($request)
    {
        
        $hobbystocks = new HobbyStock; 
        $hobbystocks = HobbyStock::find($request->id);
        
        $hobbystocks->fill([
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
        $hobbystocks->shop_img = $shop_name;
        
        $hobbystocks->update();
    }
    
    // FunitureStockテーブルのレコードを削除する
 public function deleteHobbys($id){
    HobbyStock::where('id',$id)->delete();
 }
}
