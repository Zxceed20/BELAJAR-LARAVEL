<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court_type extends Model
{
    use HasFactory;

    public function court(){
        return $this->hasMany(court::class);
    }
}
