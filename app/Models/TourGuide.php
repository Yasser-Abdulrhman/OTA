<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;
    protected $table = "tour_guide";
    protected $fillable = [
        'name','image','phone','admin_id','created_at','updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
