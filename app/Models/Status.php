<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Status extends Model
{
    use HasFactory;
        use SoftDeletes;

        public function StatusUser(){
            return $this->hasOne(User::class,'status_id');
        }


}
