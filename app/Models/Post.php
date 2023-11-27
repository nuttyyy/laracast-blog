<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];
    protected $guarded = []; //guard the id field from mass assignment
    // protected $fillable = ['title', 'excerpt', 'body','id];

    public function category()
    {
        //hasone, hasmany, belongsto, belongstomany

        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
