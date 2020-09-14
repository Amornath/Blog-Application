<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
       protected $fillable = [

     'comment_id',
     'is_active',
     'email',
     'author',
     'body',


    ];


    public function comments(){

    	return $this->belongsTo('App\Comment');
    }

}
