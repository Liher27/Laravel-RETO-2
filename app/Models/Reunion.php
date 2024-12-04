<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
