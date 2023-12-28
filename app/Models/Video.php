<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public function getLenghtAttribute($value){
        return gmdate('i:s', $value);
    }


    public function getCreatedAtAttribute($value){
        return $value. "1";

    }
}
