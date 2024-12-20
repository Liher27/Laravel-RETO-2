<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reunion extends Model
{

    use SoftDeletes;
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
