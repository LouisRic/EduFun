<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class HomeController extends Controller
{
    public function index() {
        $matakuliah = Matakuliah::take(2)->get();

        return view('Home', ['matakuliah' => $matakuliah]);
    }
}
