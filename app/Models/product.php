<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =
    [
        'name',
        'price',
        'quantitiy',
        'image',
        'category_id',
        'description',
    ];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id','id');
    }
}
