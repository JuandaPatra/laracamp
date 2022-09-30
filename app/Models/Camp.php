<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Camp extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'price'
    ];
    public function campsite_benefits()
    {
        # code...
        // return $this->hasMany(Content::class);
        return $this->hasMany(Campsite_benefits::class);
    }
    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

    public function getIsRegisteredAttribute()
    {
        if(!Auth::check()){
            return false;
        }
        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }
}
