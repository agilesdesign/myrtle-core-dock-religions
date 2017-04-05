<?php

namespace Myrtle\Core\Religions\Models;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;
}
