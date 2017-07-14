<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costume_Style extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'costume_style';
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
    function style() {
    	return $this->belongsTo(Style::class);
    }
    
    function costume() {
    	return $this->belongsTo(Costume::class);
    }
}
