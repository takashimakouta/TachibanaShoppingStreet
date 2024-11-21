<?php

namespace App\Models;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopListStock extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'shopliststocks';
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
    
    public function shoplisttopstockDisplay()           //すべての店舗一覧画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->inRandomOrder()->paginate(6);
    }
    
    
    
    public function shopcategoryDisplay()           //すべての店舗一覧画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->paginate(6);
    }
    
    public function eatdrinkstockDisplay()      //店舗一覧から「食べる・飲む」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','食べる・飲む')->paginate(6);
    }
    
    public function foodbeveragestockDisplay()      //店舗一覧から「食料品・飲料」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','食料品・飲料')->paginate(6);
    }
    
    public function fashionablestockDisplay()      //店舗一覧から「おしゃれ」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','おしゃれ')->paginate(6);
    }
    
    
    
    public function lifestylestockDisplay()      //店舗一覧から「暮らし」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','暮らし')->paginate(6);
    }
    
    
    public function beautystockDisplay()      //店舗一覧から「美容・理容・エステ」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','美容・理容・エステ')->paginate(6);
    }
    
    public function hobbystockDisplay()      //店舗一覧から「趣味・レジャー」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','趣味・レジャー')->paginate(6);
    }
    
    
    
    public function medicalstockDisplay()      //店舗一覧から「医療・健康」店舗登録画面に遷移
    {
        
        return ShopListStock::select(['shopliststocks.id','shopliststocks.shop_name','shopliststocks.shop_summary',
                                     'shopliststocks.shop_explain','shopliststocks.shop_postal','shopliststocks.shop_phone',
                                     'shopliststocks.shop_fax','shopliststocks.shop_hour','shopliststocks.shop_dayoff',
                                     'shopliststocks.shop_img','shopcategorys.shop_category'])
            ->join('shopcategorys', 'shopliststocks.shop_category_id', '=', 'shopcategorys.id')
            ->where('shop_category','医療・健康')->paginate(6);
    }
    
    
    
    
    
    public function shopStore($request)             //店舗一覧の店舗登録処理//
    {
        // ShopListStocksクラスのインスタンス化
        $shopliststocks = new ShopListStock;
        $shopliststocks->shop_name = $request->shop_name;
        $shopliststocks->shop_category_id = $request->shop_category_id;
        $shopliststocks->shop_summary = $request->shop_summary;
        $shopliststocks->shop_explain = $request->shop_explain;
        $shopliststocks->shop_postal = $request->shop_postal;
        $shopliststocks->shop_phone = $request->shop_phone;
        $shopliststocks->shop_fax = $request->shop_fax;
        $shopliststocks->shop_hour = $request->shop_hour;
        $shopliststocks->shop_dayoff = $request->shop_dayoff;
        $originalName = $request->file('shop_img')->getClientOriginalName();
        $shop_name = date('Yms_His').'_'.$originalName;
        $request->file('shop_img')->move('storage/images',$shop_name);
        $shopliststocks->shop_img = $shop_name;
        $shopliststocks->save();
        
    }
    
    //店舗更新処理
    public function Shopupdate($request)
    {
        
        $shopliststocks = new ShopListStock; 
        $shopliststocks = ShopListStock::find($request->id);
        
        $shopliststocks->fill([
            'id' => $request->id,
            'shop_name' => $request->shop_name,
            'shop_category_id' => $request->shop_category_id,
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
        $shopliststocks->shop_img = $shop_name;
        
        $shopliststocks->update();
    }
    
    // ShopListの店舗情報を削除する
    public function Shopdelete($id){
        ShopListStock::where('id',$id)->delete();
        
    }
}

