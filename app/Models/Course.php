<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class course extends Model
{
    public function subject(): MorphToMany{

        return $this->morphToMany(Subject::class);
    }
}
