<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = "tours";
    protected $fillable = [
        'tour_name',
        'tour_price',
        'tour_address',
        'start_date',
        'end_date',
        'tour_review',
        'tour_details',
        'tour_image',
        'admin_id',
        'tour_guide_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * The users that belong to the Tour
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class, 'book_tour', 'user_id', 'tour_id');
    }
}
