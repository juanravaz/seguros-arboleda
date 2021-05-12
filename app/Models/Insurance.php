<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function report(){
        return $this->hasMany(Report::class);
    }
    public function CarInsurance(){
        return $this->hasOne(CarInsurance::class);
    }
    public function LifeInsurance(){
        return $this->hasOne(LifeInsurance::class);
    }
    public function HomeInsurance(){
        return $this->hasOne(HomeInsurance::class);
    }


}
