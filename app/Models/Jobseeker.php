<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Jobseeker extends Model
{
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function links()
    {
        return $this->morphMany(Link::class, 'linkable');
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function expirances() {
        return $this->hasMany(Expirance::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class, 'user_id');
    }
}
