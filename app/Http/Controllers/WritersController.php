<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Matakuliah;

class WritersController extends Controller
{
    public function index() {
        $writer = Writer::all();

        return view('writers', ['writer' => $writer]);
    }

    public function matakuliah($writer_id) {
        $writer = Writer::findOrFail($writer_id);
        $matakuliah = Matakuliah::where('writer_id', $writer_id)->get();

        return view('category', [
            'matakuliah' => $matakuliah,
            'writer' => $writer,
            'category' => 'Mata Kuliah',
            'isMatakuliah' => false]);
    }
}
