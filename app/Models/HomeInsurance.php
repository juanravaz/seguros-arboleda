<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInsurance extends Model
{
    protected $primaryKey = 'insurance_id';

    protected $fillable = [
        'street',
        'm2',
        'postalCode',
        'insurance_id',
    ];

    use HasFactory;
    public function insurance(){
        return $this->belongsTo(Insurance::class);
    }
}
