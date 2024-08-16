<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $attributes = [
        'is_display' => true,
    ];

    /**
     * Scope a query to order results by the 'order' column in descending order.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByOrder($query)
    {
        return $query->orderBy('order');
    }

    /**
     * 賃貸
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRentOnly($query)
    {
        return $query->where('is_display', true)
                     ->where('type', '賃貸')
                     ->orderBy('order');
    }

    /**
     * 売買
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSaleOnly($query)
    {
        return $query->where('is_display', true)
                      ->where('type', '売買')
                      ->orderBy('order', 'desc');
    }

    public static function propertyTypes()
    {
        $propertyTypes = [
            '賃貸',
            '売買',
        ];

        return $propertyTypes;
    }
    
    public static function propertyPrices()
    {
        $propertyPrices = [
            '6万円未満',
            '6万円 ~ 8万円未満',
            '8万円 ~ 10万円未満',
            '10万円以上',
            'ファミリー物件',
        ];

        return $propertyPrices;
    }
}