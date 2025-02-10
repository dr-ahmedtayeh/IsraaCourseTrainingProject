<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 
        'relation_type', 'image_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
