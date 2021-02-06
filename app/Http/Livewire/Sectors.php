<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sector;
use App\Models\Appinfo;

class Sectors extends Component
{
    use WithPagination;
    public function render()
    {
		$sectors = Sector::join('images', 'sectors.id', '=', 'images.imageable_id')
            ->select('sectors.*', 'images.url')
            ->where('images.type', 'sectors')
            ->orderBy('sectors.id', 'desc')
            ->paginate(5); 
        $appinfo = Appinfo::all(); 
        return view('livewire.sectors', compact('candidates'))->extends('front_office.layouts.app', compact('appinfo'));
    }
}
