<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'area', 
        'class',
        'description',
        'state'
    ];
       
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    
    public function tracing() {
        return $this->belongsTo('App\Models\Tracing');
    }

    public function providers_projects() {
        return $this->hasMany('App\Models\Provider_Project');
    }

    public function projects_users() {
        return $this->hasMany('App\Models\Project_User');
    }

    public function scopeNames($projects, $q)
    {
        if (trim($q)) {
            $projects->where('name', 'LIKE', "%$q%")
                     ->orWhere('code', 'LIKE', "%$q%");
        }
    }
}
