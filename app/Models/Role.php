<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
   public function clients():HasMany{
    return $this->hasMany(Client::class);
   } 

}
