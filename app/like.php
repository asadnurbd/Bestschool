<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{

  protected $primaryKey = 'id';
   protected $fillable = [

      'users_id', 'post_id','like',

       ];
  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function school_posts()
  {
      return $this->belongsTo('App\school_post');
  }

}
