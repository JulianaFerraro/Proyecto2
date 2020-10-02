<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Rol extends Model
{
    use HasFactory;
    protected $table="user_rol";
    protected $filiable= ['names', 'abreviation'];
}
