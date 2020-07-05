<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school_post extends Model
{
    //


    protected $primaryKey = 'id';
     protected $fillable = [

        'id','users_id','title','slug', 'image','body','view_count','status','is_approved',
     ];

     public function user()
     {
         return $this->belongsTo('App\User');
     }

     public function likes()
     {
         return $this->belongsTo('App\like');
     }

     public function post_comments()
     {
         return $this->hasMany('App\post_comment');
     }


}
