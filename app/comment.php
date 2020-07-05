<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  protected $primaryKey = 'comment_id';
   protected $fillable = [

      'comment_id','school_id', 'user_id','comment','rating','email',
   ];

   public function school_info()
    {
        return $this->belongsTo('App\school_info');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
