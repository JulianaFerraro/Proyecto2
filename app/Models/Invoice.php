<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table="invoice";
    protected $filiable= ['purcharse_date', 'purcharse_value','user_id',
    'product_id','paymes_id'];
}
