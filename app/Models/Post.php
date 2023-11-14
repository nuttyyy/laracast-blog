<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //everything except 
    // protected $guarded = ['id'];

    //only these fields
    protected $fillable = ['title', 'excerpt', 'body'];
}
