<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produces extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produces';
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
    function category() {
    	return $this->belongsTo(Category::class);
    }
    
    function costume_detail() {
    	return $this->hasMany(Costume_Detail::class);
    }
}
