<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', // Add 'fullname' to the fillable array
        'email',
        'phone',
        'message',
    ];
}
