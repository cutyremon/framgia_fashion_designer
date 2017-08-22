<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic_Style extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'topic_style';
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
        'style_id',
        'topic_id'
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
    function topic() {
    	return $this->belongsTo(Topic::class);
    }
    
    function style() {
    	return $this->belongsTo(Style::class);
    }
}
