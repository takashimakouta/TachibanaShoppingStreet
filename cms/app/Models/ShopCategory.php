<?php

namespace App\Models;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    use HasFactory;
    protected $guarded = [
     'id'
    ];
    protected $table = 'shopcategorys';
    protected $fillable = [
        'shop_category',
    ];
    
    
    public function shopcategoryDisplay()           //すべての店舗一覧画面に遷移
    {
        
        return ShopCategory::select('shop_category')->get();
        
    }
    
    
}






