<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:28 PM
 */
use Illuminate\Database\Eloquent;

class style extends Eloquent
{
    protected $table='styles';



    public function costume(){
        return $this->hasOne('costume');

    }

    public function topic(){
        return $this->hasOne('topic');

    }
}