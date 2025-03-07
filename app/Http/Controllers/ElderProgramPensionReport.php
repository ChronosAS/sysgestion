<?php

namespace App\Http\Controllers;

use App\Models\PensionReport;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Http\Request;

class ElderProgramPensionReport extends Controller
{
    public function __invoke()
    {
        // $report = PensionReport::find($pension_report);

        // return pdf()
        //     ->view('livewire.elder-program.pension-report', [
        //         'report' => $report,
        //         ])
        //     ->format('letter')
        //     ->name('carnet-'.$report->document.'.pdf');
        return view('livewire.elder-program.pension-report');
    }
}
