<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','cat_id','price',
    ];


    public function category()
    {
        return $this->belongsTo(category::class, 'cat_id', 'id');
    }
}
