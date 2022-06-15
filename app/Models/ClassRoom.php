<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClassRoom extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function ClassUsers(){

        return $this->belongsToMany(User::class,'user_id');
    }

    public function ClassPosts()
    {
        return $this->hasMany(Posts::class,'class_id','id');
    }




}
