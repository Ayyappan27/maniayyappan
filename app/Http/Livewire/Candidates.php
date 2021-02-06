<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jobseeker;
use App\Models\Appinfo;

class Candidates extends Component
{
    use WithPagination;
    public function render()
    {
        $candidates = $this->getcandidates();
        $appinfo = $this->getappinfo();
        return view('livewire.candidates', compact('candidates'))->extends('front_office.layouts.app', compact('appinfo'));
    }

    public function getcandidates(){
        $candidates = Jobseeker::join('users', 'jobseekers.id', 'users.id')
            ->where('users.userable_type', 'App\Models\Jobseeker')
            ->orderby('jobseekers.id','DESC')
            ->paginate(5);
        return $candidates;
    }

    public function getappinfo(){
        $appinfo = Appinfo::all(); 
        return $appinfo;
    }

}
