<?php
/**
 * Created by PhpStorm.
 * User: nguyenngoc
 * Date: 7/17/2017
 * Time: 3:06 PM
 */
use Illuminate\Database\Eloquent;
class follow extends Eloquent
{
    protected $table ='follows';


    public function user(){
        return belongsTo('user','user_id');
    }
}