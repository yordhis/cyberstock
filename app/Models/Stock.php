<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode_product', 
        'categorie',
        'mark',
        'stock', 
        'costo', 
        'date_last_entry' 
    ];
}
