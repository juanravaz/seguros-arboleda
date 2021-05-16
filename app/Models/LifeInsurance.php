<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeInsurance extends Model
{
    protected $primaryKey = 'insurance_id';

    use HasFactory;
    public function insurance(){
        return $this->belongsTo(Insurance::class);
    }
}
