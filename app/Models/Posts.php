<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Posts extends Model
{
    use HasFactory;
        use SoftDeletes;


        public function PostFile(){
            return $this->hasMany(File::class,'post_id','id');
        }

        public function PostCom(){
            return $this->hasMany(Comments::class,'post_id','id');
        }

        public function PostClass(){
            return $this->belongsTo(ClassRoom::class,'class_id');
        }

        public function PostUser(){
            return $this->belongsToMany(User::class,'post_user_id');
        }
}
