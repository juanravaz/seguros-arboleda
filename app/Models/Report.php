<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public function insurance(){
        return $this->belongsTo(Insurance::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function reportimages()
    {
        return $this->hasMany(ReportImage::class);
    }
}
