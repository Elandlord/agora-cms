<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $appends = [
      'publish_year',
      'publish_month',
      'publish_day',
      'month_name',
      'day_name',
    ];

    protected $fillable = [
      'title',
      'location',
      'date',
      'description',
      'time_start',
      'time_end',
      'price',
    ];

    protected $months = [
      '01' => 'januari',
      '02' => 'februari',
      '03' => 'maart',
      '04' => 'april',
      '05' => 'mei',
      '06' => 'juni',
      '07' => 'juli',
      '08' => 'augustus',
      '09' => 'september',
      '10' => 'oktober',
      '11' => 'november',
      '12' => 'december',
    ];

    public function getDayNameAttribute() {
      setlocale(LC_TIME, 'Dutch');
      $date = Carbon::createFromDate($this->publish_year, $this->publish_month, $this->publish_day);
      return $date->formatLocalized('%A');
    }

    public function getPublishYearAttribute()
    {
      return explode('-', $this->date)[0];
    }

    public function getPublishMonthAttribute()
    {
      return explode('-', $this->date)[1];
    }


  public function getPublishDayAttribute()
    {
      return explode('-', $this->date)[2];
    }

    public function getMonthNameAttribute(){
      return $this->months[$this->publish_month];
    }



}
