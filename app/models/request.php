<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 4:31 PM
 */
use Illuminate\Database\Eloquent;

class request extends Eloquent
{
    protected $table = 'requested_produce';

    public function category()
    {
        return $this->belongsTo('category');

    }

    public function user()
    {
        return $this->belongsTo('user');
    }
}
