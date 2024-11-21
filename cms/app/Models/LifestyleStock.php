<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifestyleStock extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'lifestylestocks';
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
        
        return LifestyleStock::orderBy('created_at','asc')->simplePaginate(9);
    }
    
    //店舗を新規で登録する
    public function lifestylesStore($request)
    {
        // FunitureStocksクラスのインスタンス化
        $lifestylestocks = new LifestyleStock;
        $lifestylestocks->shop_name = $request->shop_name;
        $lifestylestocks->shop_category = $request->shop_category;
        $lifestylestocks->shop_summary = $request->shop_summary;
        $lifestylestocks->shop_explain = $request->shop_explain;
        $lifestylestocks->shop_postal = $request->shop_postal;
        $lifestylestocks->shop_phone = $request->shop_phone;
        $lifestylestocks->shop_fax = $request->shop_fax;
        $lifestylestocks->shop_hour = $request->shop_hour;
        $lifestylestocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $lifestylestocks->shop_img = $shop_name;
        $lifestylestocks->save();
        
    }
    
    
 //食べる・飲むの店舗更新処理
    public function updateLifestyles($request)
    {
        
        $lifestylestocks = new LifestyleStock; 
        $lifestylestocks = LifestyleStock::find($request->id);
        
        $lifestylestocks->fill([
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
        $lifestylestocks->shop_img = $shop_name;
        
        $lifestylestocks->update();
    }
    
    // FunitureStockテーブルのレコードを削除する
 public function deleteLifestyles($id){
    LifestyleStock::where('id',$id)->delete();
 }
}
