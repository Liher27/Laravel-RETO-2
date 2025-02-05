<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    public $timestamps = false;

    protected static function booted()
    {
        static::deleting(function ($role) {
           
            $role->users()->each(function ($user) {
                $user->delete(); 
            });
        });
    }


}


