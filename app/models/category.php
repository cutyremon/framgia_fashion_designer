<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:29 PM
 */
use Illuminate\Database\Eloquent;

class category extends Eloquent
{
    protected $table = 'categories';



    public function produce(){
        return $this->hasOne('produce');
    }
    public function request(){
        return $this->hasOne('request');
    }
}