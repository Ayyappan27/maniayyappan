<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jobseeker;

class Candidates extends Component
{
    use WithPagination;
    public function render()
    {
        $candidates = Jobseeker::join('users', 'jobseekers.id', 'users.id')
            ->where('users.userable_type', 'App\Models\Jobseeker')
            ->orderby('jobseekers.id','DESC')
            ->paginate(5);
        return view('livewire.candidates', ['candidates' => $candidates]);
    }

}
