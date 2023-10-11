<?php

namespace App\Http\Controllers;
use App\Models\Pemain;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(){
        $table = Pemain::all();
        $no = 0;

        return view('pemain', compact('table', 'no'));
    }
}
