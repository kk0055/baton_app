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
            ->orderBy('created_at', 'desc');
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

    public function railwayLines()
    {
        return $this->belongsToMany(RailwayLine::class, 'property_railway_line');
    }

    // public static function railwayLines()
    // {
    //     return [
    //         '指定無し',
    //         '小田急線',
    //         '田園都市線',
    //         '世田谷線',
    //         '東横線',
    //         '京王線',
    //     ];

    // }

    public static function propertyPrices()
    {
        $propertyPrices = [
            '指定無し',
            '7万円以下',
            '8万円台',
            '9万円台',
            '10万円台',
            '11万円以上',
        ];

        return $propertyPrices;
    }
}