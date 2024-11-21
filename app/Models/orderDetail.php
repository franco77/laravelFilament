<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orderDetail extends Model
{
    use HasFactory;
    // Relación con Order 
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    // Relación con Product 
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
