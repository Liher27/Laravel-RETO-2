<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Course extends Model
{

  public function subjects(): BelongsToMany {
    return $this->belongsToMany(Subject::class);
}
public function registrations(): BelongsToMany {
  return $this->belongsToMany(Registration::class);
}
  use SoftDeletes;
}
