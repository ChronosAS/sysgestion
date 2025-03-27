<?php

namespace App\Livewire\ElderProgram\Pension;

use App\Concerns\LivewireCustomPagination;
use App\Concerns\Telegram\ElderPensionChannel;
use App\Models\ElderProgramMember;
use App\Models\PensionReport;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Telegram\Bot\Laravel\Facades\Telegram;

#[Layout('layouts.app')]
class Show extends Component
{
    use LivewireCustomPagination;

    public PensionReport $pensionReport;
    public $hasTxt;

    public $sortField = null;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    private function generateTxt()
    {
        $reportTxt = $this->pensionReport->elders->map(fn($elder) => implode(' ', [
            $elder->elder->document,
            $elder->account_number,
            $this->pensionReport->amount,
       ]))->implode("\n");

       Storage::put('reports/'.$this->pensionReport->code.'.txt', $reportTxt);
    }

    public function saveTxt()
    {
        $this->generateTxt();
        return Storage::download('reports/'.$this->pensionReport->code.'.txt');
    }

    public function telegram()
    {
        Telegram::sendMessage([
            'chat_id' => -1002637878820,
            'text' => 'Hello World'
        ]);
    }

    public function loadElders()
    {
        return ElderProgramMember::query()
            ->select([
                'id',
                'status',
                'elder_id',
                'created_at',
                'account_number'
            ])
            ->withAggregate('elder','document')
            ->withAggregate('elder','first_names')
            ->withAggregate('elder','last_names')
            ->withAggregate('elder','email')
            ->withAggregate('elder','phone_number')
            ->whereHas('pensionReport', function ($query) {
                $query->where('pension_report_id', $this->pensionReport->id);
            })
            ->search($this->search)
            // ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.elder-program.pension.show',[
            'elders' => $this->loadElders()
        ]);
    }
}
