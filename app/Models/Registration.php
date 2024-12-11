<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Registration extends Model
{
    use SoftDeletes;

    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }
    
}
