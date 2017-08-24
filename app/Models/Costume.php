<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'costumes';
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
        'user_id',
        'style_id',
        'average_point',
        'description'
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
    function costume_style() {
    	return $this->hasMany(Costume_Style::class);
    }

    function costume_detail() {
    	return $this->hasMany(Costume_Detail::class);
    }

    function rate() {
    	return $this->hasMany(Rate::class);
    }

    function comment() {
    	return $this->hasMany(Comment::class);
    }

    function user() {
    	return $this->belongsTo(User::class);
    }
}
