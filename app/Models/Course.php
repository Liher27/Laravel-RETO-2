<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Course extends Model
{

  public function subjects(): HasMany {
    return $this->hasMany(Subject::class);
}
  use SoftDeletes;
}
