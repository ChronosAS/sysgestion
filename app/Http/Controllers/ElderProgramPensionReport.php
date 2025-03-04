<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElderProgramPensionReport extends Controller
{
    public function __invoke()
    {
        return view('livewire.elder-program.pension-report');
    }
}
