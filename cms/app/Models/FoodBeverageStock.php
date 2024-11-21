<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodBeverageStock extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'foodbeveragestocks';
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
        
        return FoodBeverageStock::orderBy('created_at','asc')->simplePaginate(6);
    }
    
    
    
    
    public function foodbeverageStore($request)
    {
        // FoodBeverageStocksクラスのインスタンス化
        $foodbeveragestocks = new FoodBeverageStock;
        $foodbeveragestocks->shop_name = $request->shop_name;
        $foodbeveragestocks->shop_category = $request->shop_category;
        $foodbeveragestocks->shop_summary = $request->shop_summary;
        $foodbeveragestocks->shop_explain = $request->shop_explain;
        $foodbeveragestocks->shop_postal = $request->shop_postal;
        $foodbeveragestocks->shop_phone = $request->shop_phone;
        $foodbeveragestocks->shop_fax = $request->shop_fax;
        $foodbeveragestocks->shop_hour = $request->shop_hour;
        $foodbeveragestocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $foodbeveragestocks->shop_img = $shop_name;
        $foodbeveragestocks->save();
        
    }
    
    //食料品・飲料の店舗更新処理
    public function updateFoodBeverages($request)
    {
        
        $foodbeveragestocks = new FoodBeverageStock; 
        $foodbeveragestocks = FoodBeverageStock::find($request->id);
        
        $foodbeveragestocks->fill([
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
        $foodbeveragestocks->shop_img = $shop_name;
        
        $foodbeveragestocks->update();
    }
    
       // FoodBeverageStockテーブルのレコードを削除する
 public function deleteFoodBeverages($id){
    FoodBeverageStock::where('id',$id)->delete();
 }
 
 
}
