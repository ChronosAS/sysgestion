<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\ElderProgramMember;
use App\Models\PensionReport;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ElderProgramController extends Controller
{
    public function generateIdCard($citizen)
    {
        $citizen = Citizen::with('elder')->find($citizen);
        $citizen->elder->update(['has_card' => true]);

        return pdf()
            ->view('livewire.elder-program.carnet', [
                'citizen' => $citizen,])
            ->paperSize('486','306','px')
            ->name('carnet-'.$citizen->document.'.pdf');
    }

    public function generatePensionReport($report)
    {
        $report = PensionReport::with('elders.elder')->find($report);
        $reportTxt = $report->elders->map(fn($elder) => implode(' ', [
             $elder->elder->document,
             $elder->account_number,
             $report->amount,
        ]))->implode("\n");

        Storage::put('reports/'.$report->code.'.txt', $reportTxt);

        return pdf()
            ->view('livewire.elder-program.pension-report', [
                'report' => $report,
                ])
            ->format('letter')
            ->name('reporte-'.$report->code.'.pdf');
        // return view('livewire.elder-program.pension-report',['report' => $report]);
    }

    public function generateApplicationReport(ElderProgramMember $elderProgramMember)
    {
        return pdf()
            ->view('livewire.elder-program.application-report', [
                'elderProgramMember' => $elderProgramMember,
                ])
            ->format('letter')
            ->name('reporte-'.$elderProgramMember->elder->document.'.pdf');

        // return view('livewire.elder-program.application-report',['elderProgramMember' => $elderProgramMember]);
    }
}
