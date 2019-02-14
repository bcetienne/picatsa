<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vignettes;

class VignettesController extends Controller
{
    public function index() {
        $vignettes = Vignettes::all();
        return view('welcome', ['vignettes' => $vignettes]);
    }

    public function showOne($id) {
        echo $id;
    }
}
