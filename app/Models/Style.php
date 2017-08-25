<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'styles';
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
        'tittle',
        'description',
        'image',
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

    function costume_sytle()
    {
        return $this->hasMany(Costume_Style::class);
    }

    function topic_style()
    {
        return $this->hasMany(Topic_Style::class);
    }
}
