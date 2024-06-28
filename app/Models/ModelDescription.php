<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelDescription extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'model_descriptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'class_name', 'description'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];



    public function userHistories()
    {
        return $this->hasMany(UserHistory::class);
    }
}
