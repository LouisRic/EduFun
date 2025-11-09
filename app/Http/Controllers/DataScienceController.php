<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class DataScienceController extends Controller
{
    public function index() {
        $matakuliah = Matakuliah::where('category', 'Data Science')->get();

        return view('category', ['matakuliah' => $matakuliah,
        'category' => 'Data Science',
        'isMatakuliah' => true]);
    }
}
