<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\Role_UserFactory;

class Role_User extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function roles() {
    return $this->belongsToMany(Role::class, 'role_users');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class,'role_users');
    }

    protected static function newFactory()
    {
        return Role_UserFactory::new();
    }
}