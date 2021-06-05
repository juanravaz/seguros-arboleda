<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportImage extends Model
{
    use HasFactory;

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function getImagenAttribute()
    {
        return '/images/reports/'.$this->report->title.'/'.$this->name;
    }
}
