<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class school_info extends Model
{
  use Notifiable;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

 protected $primaryKey = 'school_id';
  protected $fillable = [

     'school_id','school_name', 'image','type','cost','s_address','totalStudent','feeStructureImg','website' ,'low_incomeStudents','equityOverview','studentProgress','testScore','classRange','area','email','phone','rating','available','longi','lati',
  ];



  public function comments()
   {
       return $this->hasMany('App\comment');
   }
}
