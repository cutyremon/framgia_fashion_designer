<?php
use Illuminate\Database\Eloquent;

class user extends Eloquent
{
    protected $table = 'users';


    public function rate()
    {
        return $this->hasOne('rate');

    }

    public function comment()
    {
        return $this->hasOne('comment');
    }

    public function follow()
    {
        return $this->hasOne('follow');

    }

    public function costume()
    {
        return $this->hasOne('costume');

    }

    public function request()
    {
        return $this->hasOne('request');
    }
}
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 2:50 PM
 */
