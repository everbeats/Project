<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FishingHook extends Model
{
    protected $fillable=['hook_id',
                         'hook_name',
                         'hook_size',
                         'hook_type',
                         'hook_color',
                         'hook_brand',
                         'hook_image',
                         'hook_price'
    ];
    protected $primaryKey = 'hook_id';
}
