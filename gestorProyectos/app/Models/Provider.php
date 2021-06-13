<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_povider',
        'name_contact'
       
        
    ];

    public function providers_projects() {
        return $this->hasMany('App\Models\Provider_Project');
    }

    public function scopeNames($providers, $q)
    {
        if (trim($q)) {
            $providers->where('name_provider', 'LIKE', "%$q%")
            ->orWhere('name_contact', 'LIKE', "%$q%");
        }
    }
}

