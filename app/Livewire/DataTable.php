<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

enum ShowButton
{
    case Create;
    case Edit;
}

class DataTable extends Component
{
    use WithPagination;

    public $headers = [];
    public $columns = [];
    private $model;

    public function mount($model)
    {
        $this->columns = count($model) > 0 ? array_keys($model[0]->getAttributes()) : [];
        $this->model = $model;
    }

    public function render()
    {
        return view('livewire.data-table', [
            'model' => $this->model
        ]);
    }
}
