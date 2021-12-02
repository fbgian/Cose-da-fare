<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class SitoController extends Controller {
    public function home(Request $r) {
        return view('index');
    }

    public function getDafare(Request $r) {
        return response()->json(array('res'=>true, 'dafare'=>Nota::get()));
    }

    public function githubWebhook(Request $r) {
        return response()->json($r);
    }
}
