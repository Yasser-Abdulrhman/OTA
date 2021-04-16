<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = "hotel";
    protected $fillable = [
        'hot_name','hot_price','hot_address','hot_details','hot_type','hot_image','admin_id','created_at','updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
