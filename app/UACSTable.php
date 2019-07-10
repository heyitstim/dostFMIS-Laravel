<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UACSTable extends Model
{
    protected $table = 'uacs';
    protected $fillable = [
        'id', 'description',
    ];
}
