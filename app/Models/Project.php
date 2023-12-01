<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'description', 'image', 'project_link', 'status'];

    public function project_cats()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }
}
