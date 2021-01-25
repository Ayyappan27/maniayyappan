<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Company extends Model
{
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function links()
    {
        return $this->morphMany(Link::class, 'linkable');
    }
}
