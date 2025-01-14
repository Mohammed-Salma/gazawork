<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    function company() {
        return $this->belongsTo(Company::class)->withDefault();
    }

    function user_project() {
        return $this->belongsTo(UserProject::class)->withDefault();
    }
}
