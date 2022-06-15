<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory;
        use SoftDeletes;

        public function ComPost(){
            return $this->belongsTo(Posts::class,'post_id');
        }

        public function ComUser(){
            return $this->belongsTo(User::class,'com_user_id');
        }
}
