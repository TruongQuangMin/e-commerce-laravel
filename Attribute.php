<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['sku','price','stock','color','product_id','photo'];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class,'product_id');
    }


    public function getPrice()
    {
        $originalPrice = $this->price ?? 0;
        return $originalPrice;
    }

    public function getSku($productId){
        return $this->where('id', $productId)->value('sku');
    }

    /**
     * Lấy giá nhỏ nhất và lớn nhất cho một SKU cụ thể.
     *
     * @param string $skuName Tên SKU để tìm kiếm.
     * @return array
     */
    public static function getPriceRangeForSku($skuName)
    {
        $skuName = strtolower($skuName);  // Chuyển về chữ thường
        $skuName = str_replace(' ', '-', $skuName);  // Thay thế khoảng trắng bằng dấu gạch nối

        $minPrice = self::whereRaw("REPLACE(LOWER(sku), ' ', '-') LIKE ?", ["%{$skuName}%"])
                        ->min('price');
        $maxPrice = self::whereRaw("REPLACE(LOWER(sku), ' ', '-') LIKE ?", ["%{$skuName}%"])
                        ->max('price');

        return ['minPrice' => $minPrice, 'maxPrice' => $maxPrice];
    }


}
