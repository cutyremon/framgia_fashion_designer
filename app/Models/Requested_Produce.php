<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requested_Produce extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requested_produce';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $date = [
        'create_at',
        'delete_at',
    ];
    function user() {
    	return $this->belongsTo(User::class);
    }
    
    function category() {
    	return $this->belongsTo(Category::class);
    }
}
