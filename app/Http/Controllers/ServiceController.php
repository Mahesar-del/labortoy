<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return redirect('/service/genomic-diagnostics');
    }

    public function genomic()
    {
        return view('services.genomic-diagnostics');
    }

    public function molecular()
    {
        return view('services.molecular-diagnostics');
    }

    public function clinical()
    {
        return view('services.clinical-diagnostics');
    }
}
