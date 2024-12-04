<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class user_subject extends Model
{
    public function subjects(): HasMany {
        return $this->hasMany(Subject::class);
    }
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
