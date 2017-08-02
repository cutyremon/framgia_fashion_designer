<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costume_Detail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'costume_detail';
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
    function produce() {
    	return $this->belongsTo(Produce::class);
    }
    
    function costume() {
    	return $this->belongsTo(Costume::class);
    }
}
