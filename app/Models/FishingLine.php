<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FishingLine extends Model
{
    protected $fillable=['line_id',
                         'line_name',
                         'line_size',
                         'line_color',
                         'line_type',
                         'line_brand',
                         'line_image',
                         'line_price'
    ]; 
    protected $primaryKey = 'line_id';
}
