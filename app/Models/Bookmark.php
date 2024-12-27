<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmark';
    protected $guarded = [];

    public $timestamps = true;
}
