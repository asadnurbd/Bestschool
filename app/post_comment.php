<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
  protected $primaryKey = 'id';
   protected $fillable = [

      'post_id', 'user_id','comment','rating','email',
   ];

   public function school_posts()
    {
        return $this->belongsTo('App\school_posts');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
