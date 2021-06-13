<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    use HasFactory;
    protected $fillable = [                        
        'birthdate',
        'description'
    ];
    
    public function projects() {
        return $this->hasMany('App\Models\Project');
    }

    public function scopeNames($tracing, $q) {
        if (trim($q)) {
            $tracing->where('birthdate', 'LIKE', "%$q%")
                  ->orWhere('description', 'LIKE', "%$q%");
        }
    }

}
