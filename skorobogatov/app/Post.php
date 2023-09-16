<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'lobby', 'time', 'date'];

    protected $table = 'price';
}
