<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:29 PM
 */
use Illuminate\Database\Eloquent;

class produce extends Eloquent
{
protected $table='produces';

    public function costume(){
        return $this->hasOne('costume');
    }
    public function category(){
        return $this->belongsTo('category');
    }
}