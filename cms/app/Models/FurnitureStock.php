<?php

namespace App\Models;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FurnitureStock extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'furniturestocks';
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
        
        return FurnitureStock::orderBy('created_at','asc')->paginate(8);
    }
    
    //店舗を新規で登録する
    public function furniturestore($request)
    {
        // FunitureStocksクラスのインスタンス化
        $furniturestocks = new FurnitureStock;
        $furniturestocks->shop_name = $request->shop_name;
        $furniturestocks->shop_category = $request->shop_category;
        $furniturestocks->shop_summary = $request->shop_summary;
        $furniturestocks->shop_explain = $request->shop_explain;
        $furniturestocks->shop_postal = $request->shop_postal;
        $furniturestocks->shop_phone = $request->shop_phone;
        $furniturestocks->shop_fax = $request->shop_fax;
        $furniturestocks->shop_hour = $request->shop_hour;
        $furniturestocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $furniturestocks->shop_img = $shop_name;
        $furniturestocks->save();
        
    }
    
    
 //食べる・飲むの店舗更新処理
    public function updateEatDrinks($request)
    {
        
        $furniturestocks = new FurnitureStock; 
        $furniturestocks = FurnitureStock::find($request->id);
        
        $furniturestocks->fill([
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
        $furniturestocks->shop_img = $shop_name;
        
        $furniturestocks->update();
    }
    
    // FunitureStockテーブルのレコードを削除する
 public function deleteEatDrinks($id){
    FurnitureStock::where('id',$id)->delete();
 }
}
