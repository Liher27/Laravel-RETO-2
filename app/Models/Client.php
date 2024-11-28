<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
   public function reunions(): HasMany{
    return $this->hasMany(Reunion::class);
   }

   public function role(): BelongsTo{
    return $this->belongsTo(Role::class);
   }

   public function subjects(): MorphToMany{
    return $this->morphToMany(Subject::class);
   }
}
