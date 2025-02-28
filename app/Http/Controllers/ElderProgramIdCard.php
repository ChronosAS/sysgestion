<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;
use App\Models\Citizen;

class ElderProgramIdCard extends Controller
{
    public function __invoke($citizen)
    {
        $citizen = Citizen::find($citizen);
        return pdf()
            ->view('livewire.elder-program.carnet', [
                'citizen' => $citizen,])
            ->paperSize('486','306','px')
            ->name('carnet-'.$citizen->document.'.pdf');
    }
}
