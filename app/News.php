<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

	protected $appends = [
		'publish_year',
		'publish_month',
		'publish_day',
		'month_name',
	];

    protected $fillable = [
      'title',
      'body',
      'author',
      'publish_date',
      'occurence_date',
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

    public function getPublishYearAttribute()
    {
    	return explode('-', $this->publish_date)[0];
    }

    public function getPublishMonthAttribute()
    {
    	return explode('-', $this->publish_date)[1];
    }


	public function getPublishDayAttribute()
    {
    	return explode('-', $this->publish_date)[2];
    }

    public function getMonthNameAttribute(){
    	return $this->months[$this->publish_month];
    }


}
