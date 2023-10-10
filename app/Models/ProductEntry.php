<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntry extends Model
{
    use HasFactory;

    protected $fillable = [
       'entry_code', 
       'barcode_product', 
       'provider_code', 
       'quantity', 
       'unit_cost', 
       'subtotal', 
       'tax',  // impuesto
       'concept', // Tipo de entrada
       'observation',
       'entry_type', 
       'status', 
       'date_entry',
    ];

}
