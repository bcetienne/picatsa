<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VignettesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function showOne($id) {
        echo $id;
    }
}
