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

    public function markAsDone(Request $r) {
        $nota = Nota::find($r->id);
        $nota->fatto = 1;
        return response()->json(array('res'=>true, 'nota'=>$nota));
    }
}
