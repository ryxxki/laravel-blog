<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //sesaikan schemanya
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = false;
}
