<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\factories\SubjectFactory;

class Subject extends Model
{
    use SoftDeletes;

    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }

    public function user_subjects(): BelongsToMany {
        return $this->belongsToMany(user_subjects::class);
    }

    protected static function newFactory()
    {
        return SubjectFactory::new();
    }
}
