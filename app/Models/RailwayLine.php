<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RailwayLine extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_railway_line');
    }
}