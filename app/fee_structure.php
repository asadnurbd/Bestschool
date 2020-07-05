<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee_structure extends Model
{

  protected $primaryKey = 'fee_id';
  protected $fillable = [

    'fee_id','class', 'admission_fee','month_fee','library_fee','other_fee',
 ];
}
