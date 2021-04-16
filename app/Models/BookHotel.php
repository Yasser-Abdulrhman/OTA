<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookHotel extends Model
{
    use HasFactory;
    protected $table = "book_hotel";
    protected $fillable = [
        'book_date','check_in_date','check_out_date','hotel_id','user_id','created_at','updated_at'
    ];
}
