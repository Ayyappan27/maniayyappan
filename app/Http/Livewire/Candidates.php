<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jobseeker;

class Candidates extends Component
{
    // use WithPagination;
    public function render()
    {
        $candidates = Jobseeker::with('user')->paginate(8);
        return view('livewire.candidates', ['candidates' => $candidates]);
    }

}
