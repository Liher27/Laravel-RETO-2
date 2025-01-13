<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role_User extends Model
{
    public function roles()
{
    return $this->belongsToMany(Role::class, 'role_users');
}
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class,'role_users');
    }
}
