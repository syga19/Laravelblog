<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    public $fillable = ['title', 'text'];

    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

}
