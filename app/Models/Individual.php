<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Individual extends Model
{

    protected $table = 'individuals';

    protected $fillable = ['address', 'country', 'city', 'nationality'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
