<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
      'title',
      'location',
      'date',
      'description',
      'time_start',
      'time_end',
      'price',
    ];
}
