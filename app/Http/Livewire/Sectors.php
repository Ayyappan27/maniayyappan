<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sector;

class Sectors extends Component
{
    use WithPagination;
    public function render()
    {
		$sectors = Sector::with('image')->paginate(5); 
        return view('livewire.sectors', ['sectors' => $sectors]);
    }
}
