<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FishingRod extends Model
{
    protected $fillable=['rod_id',
                         'rod_name',
                         'rod_length',
                         'rod_color',
                         'rod_power',
                         'rod_line',
                         'rod_type',
                         'rod_brand',
                         'rod_image',
                         'rod_price'
    ];
    protected $primaryKey = 'rod_id';
}
