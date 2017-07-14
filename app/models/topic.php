<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:30 PM
 */
use Illuminate\Database\Eloquent;

class topic extends Eloquent
{
    protected $table='topics';
    public function style(){
        return hasOne('style');
    }

}