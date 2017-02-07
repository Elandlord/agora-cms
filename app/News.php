<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
      'title',
      'body',
      'author',
      'publish_date',
      'occurence_date',
    ];
}
