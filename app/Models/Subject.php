<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Subject extends Model
{
    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }

    public function user_subjects(): BelongsToMany {
        return $this->belongsToMany(user_subjects::class);
    }
    use SoftDeletes;
}
