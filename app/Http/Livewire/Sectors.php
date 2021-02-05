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
		$sectors = Sector::join('images', 'sectors.id', '=', 'images.imageable_id')
            ->select('sectors.*', 'images.url')
            ->where('images.type', 'sectors')
            ->orderBy('sectors.id', 'desc')
            ->paginate(5); 
        return view('livewire.sectors', ['sectors' => $sectors]);
    }
}
