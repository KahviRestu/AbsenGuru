<?php

namespace App\Http\Controllers;
use App\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('absensi.index');
    }
}
