<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_id'           
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function scopeNames($projects_users, $q)
    {
        if (trim($q)) {
            $projects_users->where('user_id', 'LIKE', "%$q%")
            ->orWhere('project_id', 'LIKE', "%$q%");
        }
    }

}
