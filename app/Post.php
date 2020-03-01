<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable = [
        'title', 'subject', 'description','user_id',
    ];
}
