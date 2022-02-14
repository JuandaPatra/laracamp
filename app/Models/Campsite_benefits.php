<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campsite_benefits extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
    ];
    public function content()
    {
        # code...
        return $this->belongsTo(Camp::class);
    }
}
