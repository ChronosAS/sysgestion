<?php

namespace App\Http\Controllers;

use App\Models\PensionReport;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ElderProgramPensionReport extends Controller
{
    public function __invoke($pension_report)
    {
        $report = PensionReport::find($pension_report);

        $reportTxt = $report->elders->map(fn($elder) => [
            'cedula' => $elder->elder->document,
            'cuenta' => $elder->account_number,
            'monto' => $report->amount.' Bs',
        ])->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        Storage::put('reports/report-'.$report->code.'.txt', $reportTxt);

        return pdf()
            ->view('livewire.elder-program.pension-report', [
                'report' => $report,
                ])
            ->format('letter')
            ->name('reporte-'.$report->code.'.pdf');
        // return view('livewire.elder-program.pension-report',['report' => $report]);
    }
}
