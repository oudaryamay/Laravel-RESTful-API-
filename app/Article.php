<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //require field
    protected $fillable = ['title', 'body'];
}
