<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'content',
        'user_id'
    ];

    public function user()
    {
       return $this->hasOne(User::class, 'id', 'user_id');
    }
}
