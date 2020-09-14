<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

     'post_id',
     'is_active',
     'email',
     'author',
     'body',


    ];




    public function replies(){


    	return $this->hasMany('App\Reply');
    }

    public function post(){

        return $this->belongsTo('App\Post');
    }




}
