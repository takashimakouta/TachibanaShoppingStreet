<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalStock extends Model
{
    use HasFactory;
     protected $guarded = [
     'id'
    ];
    protected $table = 'medicalstocks';
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
        
        return MedicalStock::orderBy('created_at','asc')->simplePaginate(9);
    }
    
    
    //店舗を新規で登録する
    public function medicalsStore($request)
    {
        // FashionableStocksクラスのインスタンス化
        $medicalstocks = new MedicalStock;
        $medicalstocks->shop_name = $request->shop_name;
        $medicalstocks->shop_category = $request->shop_category;
        $medicalstocks->shop_summary = $request->shop_summary;
        $medicalstocks->shop_explain = $request->shop_explain;
        $medicalstocks->shop_postal = $request->shop_postal;
        $medicalstocks->shop_phone = $request->shop_phone;
        $medicalstocks->shop_fax = $request->shop_fax;
        $medicalstocks->shop_hour = $request->shop_hour;
        $medicalstocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $medicalstocks->shop_img = $shop_name;
        $medicalstocks->save();
        
    }
    
    
 //おしゃれの店舗更新処理
    public function updateMedicals($request)
    {
        
        $medicalstocks = new MedicalStock; 
        $medicalstocks = MedicalStock::find($request->id);
        
        $medicalstocks->fill([
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
        $medicalstocks->shop_img = $shop_name;
        
        $medicalstocks->update();
    }
    
    // FunitureStockテーブルのレコードを削除する
 public function deleteMedicals($id){
    MedicalStock::where('id',$id)->delete();
 }
}
