<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider_project extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'project_id'
        
    ];

    public function providers() {
        return $this->belongsTo('App\Models\Provider');
    }

    public function scopeNames($providers_projects, $q)
    {
        if (trim($q)) {
            $providers_projects->where('provider_id', 'LIKE', "%$q%")
            ->orWhere('project_id', 'LIKE', "%$q%");
        }
    }
}
