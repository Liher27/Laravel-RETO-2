<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{

    use SoftDeletes;

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class,'role_users');
    }

}


