<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class user_subject extends Model
{

    use SoftDeletes;

     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

    public function subjects(): BelongsToMany {
        return $this->belongsToMany(Subject::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
