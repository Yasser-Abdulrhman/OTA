<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = "cars";
    protected $fillable = [
        'car_model','car_details','car_image','car_price','admin_id','created_at','updated_at'
    ];
}
