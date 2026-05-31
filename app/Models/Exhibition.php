<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_url',
        'netx_asset_id',
        'is_published',
        'start_date',
        'end_date',
    ];
}