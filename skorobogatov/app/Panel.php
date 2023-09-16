<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    protected $fillable = ['id', 'name', 'number', 'hours', 'lobby', 'guys'];

    protected $table = 'Orders';
}
