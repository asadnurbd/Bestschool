<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address', 'image','password','area','about','phone','occupation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function school_posts()
     {
         return $this->hasMany('App\school_post');
     }

    public function comments()
     {
         return $this->hasMany('App\comment');
     }

     public function likes()
      {
          return $this->hasMany('App\like');
      }

      public function post_comments()
       {
           return $this->hasMany('App\post_comment');
       }


}
