<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index($id) {
        $matakuliah = Matakuliah::findOrFail($id);

        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }
}
