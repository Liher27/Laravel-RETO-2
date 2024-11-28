<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class subject extends Model
{
    public function courses(): MorphToMany{
        return $this->morphToMany(Course::class);
    }

    public function client(): MorphToMany{
        return $this->morphToMany(Client::class);
       }
}
