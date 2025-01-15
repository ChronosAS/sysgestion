<?php

namespace App\Livewire\Applications;

use App\Concerns\LivewireCustomPagination;
use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $status;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function getRecipient($type,$id)
    {
        return ($type::find($id))->document;
    }

    public function deleteApplication($application)
    {
        Application::find($application)->delete();
    }

    public function loadApplications()
    {
        return Application::query()
            ->select([
                'id',
                'code',
                'status',
                'recipient_id',
                'recipient_type',
                'application_date',
                'delivery_date',
            ])
            ->withAggregate('applicant','document')
            ->when($this->status, function ($query) {
                return $query->where('status',$this->status);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[Layout('layouts.app',['header'=>'Solicitudes'])]
    public function render()
    {
        return view('livewire.applications.index',[
            'applications' => $this->loadApplications()
        ]);
    }
}
