<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeInsurance extends Model
{
    use HasFactory;
    public function insurance(){
        return $this->hasOne(Insurance::class);
    }
}
