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
            ->paginate(8); 
        $appinfo = $this->getappinfo();
        return view('livewire.sectors', compact('sectors'))->extends('front_office.layouts.app', compact('appinfo'));
    }

    public function getappinfo(){
        $appinfo = Appinfo::all(); 
        return $appinfo;
    }
}
