<?php

namespace App\Models;

use Illuminate\Http\Request;
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
        'category_id',
        'produce_name',
        'price',
        'description',
        'image',
        'color',
        'gender'
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

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function costume_detail()
    {
        return $this->hasMany(Costume_Detail::class);
    }

    public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->has('category') && $request->get('category') != 0) {
            $query->where('category_id', '=', $request->get('category'));
        }
        if ($request->has('keyword')) {
            $query->where('produce_name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('gender')) {
            $query->where('gender', '=', $request->get('gender'));
        }
        if ($request->has('color')) {
            $query->where('color', '=', $request->get('color'));
        }

        $query->orderBy('id', 'desc');

        return $query;
    }
}

