<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:11 PM
 */
use Illuminate\Database\Eloquent;

class costume extends Eloquent
{
    protected $table = 'costumes';


    public function rate()
    {
        return $this->hasOne('rate');

    }

    public function comment()
    {
        return $this->hasOne('comment');
    }

    public function style()
    {
        return $this->hasOne('style');
    }

    public function produce()
    {
        return $this->hasOne('produce');

    }

    public function user(){
        return $this->belongsTo('user');

    }
}
