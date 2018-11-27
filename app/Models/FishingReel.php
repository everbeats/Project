<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FishingReel extends Model
{
    protected $fillable=['reel_id',
                         'reel_name',
                         'reel_size',
                         'reel_color',
                         'reel_type',
                         'reel_brand',
                         'reel_image',
                         'reel_price'
    ];
    protected $primaryKey = 'reel_id';
}
