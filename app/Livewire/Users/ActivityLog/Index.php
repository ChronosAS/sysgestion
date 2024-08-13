<?php

namespace App\Livewire\Users\ActivityLog;

use App\Concerns\LivewireCustomPagination;
use App\Models\User;
use Livewire\Component;
use App\Models\Activity;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireCustomPagination;

    public User $user;

    public $sortField = null;

    protected $queryString = [
        'sortField' => ['except'=>''],
        'sortAsc' => ['except'=>false],
        'perPage' => ['except' => '10']
    ];

    public function mount($user)
    {
        $this->user = $user;
    }

    private function loadActivities(){
        return Activity::where(['causer_type'=>'App\Models\User','causer_id'=>$this->user->id])
            ->when($this->sortField, function($query){
                $query->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC');
            })
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.users.activity-log.index',[
            'activities' => $this->loadActivities()
        ]);
    }
}
