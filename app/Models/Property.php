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
     * This scope can be used to easily retrieve records sorted by the 'order' column
     * in descending order, which is useful when displaying items in a specific sequence.
     *
     * Usage:
     * $properties = Property::orderByOrder()->get();
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByOrder($query)
    {
        return $query->orderBy('order', 'desc');
    }
}