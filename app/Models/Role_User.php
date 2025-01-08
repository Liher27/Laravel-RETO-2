<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
