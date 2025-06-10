<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    protected $fillable = [
        'title',
        'country',
        'user_id',
        'body',
        'image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
