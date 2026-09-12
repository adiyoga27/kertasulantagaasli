<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'size', 'price', 'description', 'image',
        'marketplace_shopee', 'marketplace_tokopedia', 'marketplace_lazada',
        'is_available', 'sort_order',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['is_available' => 'boolean'];
    }
}
