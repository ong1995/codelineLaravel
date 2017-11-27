<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ['user_id', 'film_id', 'comment'];

  	public function user(){
  		return $this->belongsTo('App\User', 'user_id', 'id');
  	}
}
