<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OgolneController extends Controller
{
    public function start() {
        return view('ogolne.welcome');
    }

    public function kontakt() {
        return view('ogolne.kontakt');
    }

    public function onas() {
        return view('ogolne.onas');
    }
}
