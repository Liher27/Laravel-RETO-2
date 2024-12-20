<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class user_subject extends Model
{

    use SoftDeletes;

    public function subjects(): BelongsToMany {
        return $this->belongsToMany(Subject::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

}
