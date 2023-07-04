<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'kategoris_id',
        'description',
        'price',
        'thumbnail',
        'demo'
    ];
    public function kategoris()
    {
        return $this->belongsTo(Kategori::class);
    }
}
