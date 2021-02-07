<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectors';

    protected $fillable = ['sector_name', 'position'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
