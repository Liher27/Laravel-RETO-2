<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{

    use SoftDeletes;

    public function users(): HasMany {
        return $this->hasMany(User::class,'user_id');
    }

}


