<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_povider',
        'name_contact',
        'image_provider'
    ];

    public function providers() {
        return $this->hasMany('App\Models\Provider');
    }

    public function scopeNames($providers, $q)
    {
        if (trim($q)) {
            $providers->where('name_provider', 'LIKE', "%$q%")
            ->orWhere('name_contact', 'LIKE', "%$q%");
        }
    }
}

