<?php

namespace App\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;

class Programs extends Component
{
    use WithPagination;

    public $headers = [
        'Nama Program',
        'Total Biaya',
        'Target Tercapai',
        'Deskripsi'
    ];

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $programs = Program::select('title', 'required_cost', 'achievement_date', 'description')->paginate(10);
        return view('livewire.programs')->with('programs', $programs);
    }
}
