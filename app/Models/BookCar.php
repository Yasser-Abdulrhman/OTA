<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCar extends Model
{
    use HasFactory;
    protected $table = "book_car";
    protected $fillable = [
        'time_from','time_to','car_id','user_id','created_at','updated_at'
    ];
}
