<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Individual extends Model
{
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
