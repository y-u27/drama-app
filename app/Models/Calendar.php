<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar_register';

    protected $fillable = [
        'title',
        'country',
        'body',
        'start'
    ];
}
