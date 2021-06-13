<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'       
    ];

    public function projects() {
        return $this->hasMany('App\Models\Project');
    }

    public function scopeNames($categories, $q)
    {
        if (trim($q)) {
            $categories->where('name', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");
        }
    }

}
