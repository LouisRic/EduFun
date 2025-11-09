<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class NetworkSecurityController extends Controller
{
    public function index() {
        $matakuliah = Matakuliah::where('category', 'Network Security')->get();

        return view('category', ['matakuliah' => $matakuliah,
        'category' => 'Network Security',
        'isMatakuliah' => true]);
    } 
}
