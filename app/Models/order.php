<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable =
    [
        'product_id',
    ];
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }
}
