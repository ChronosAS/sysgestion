<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;
use App\Models\Citizen;

class ElderProgramIdCard extends Controller
{
    public function __invoke(Citizen $citizen)
    {
        return pdf()
            ->view('livewire.elder-program.carnet', compact('citizen'))
            ->name('carnet-'.$citizen->document.'.pdf');
    }
}
