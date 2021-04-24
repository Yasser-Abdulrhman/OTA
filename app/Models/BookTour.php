<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTour extends Model
{
    use HasFactory;
    protected $table = "book_tour";
    protected $fillable = [
        'book_date',
        'tour_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    
}
