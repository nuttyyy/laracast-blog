<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; //guard the id field from mass assignment
    // protected $fillable = ['title', 'excerpt', 'body','id];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
