<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Registration extends Model
{
    public $timestamps = false;
    use SoftDeletes;
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class);
    }
    
}
