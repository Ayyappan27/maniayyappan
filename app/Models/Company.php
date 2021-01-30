<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Company extends Model
{

    protected $table = 'companies';

    protected $fillable = ['company_name', 'website', 'description', 'address', 'country', 'city', 'founded_date', 'sector', 'number_employees'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function links()
    {
        return $this->morphMany(Link::class, 'linkable');
    }
}
