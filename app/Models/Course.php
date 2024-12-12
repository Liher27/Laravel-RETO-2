<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Database\Factories\CourseFactory;

class Course extends Model
{

  use HasFactory;  
  use SoftDeletes;
  
  public function subjects(): BelongsToMany {
    return $this->belongsToMany(Subject::class);
  }
  
  public function registrations(): BelongsToMany {
  return $this->belongsToMany(Registration::class);
  }
    
  protected static function newFactory()
  {
      return CourseFactory::new();
  }

}