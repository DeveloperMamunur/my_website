<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'status'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
