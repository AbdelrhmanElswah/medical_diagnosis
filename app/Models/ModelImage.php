<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelImage extends Model
{
    protected $fillable = ['user_id', 'image_path','name', 'model_type'];

    // Relationship with User (if you have authentication)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userHistories()
    {
        return $this->hasMany(UserHistory::class);
    }

}
