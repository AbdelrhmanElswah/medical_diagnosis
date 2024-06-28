<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'model_image_id',
        'model_description_id',
        'category',
        'date',
        'result',
    ];

    /**
     * Get the user that owns the history record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the model image associated with the history record.
     */
    public function modelImage()
    {
        return $this->belongsTo(ModelImage::class);
    }

    /**
     * Get the model description associated with the history record.
     */
    public function modelDescription()
    {
        return $this->belongsTo(ModelDescription::class);
    }
}
