<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

    }

    public function show($id = null) {
        // Get all
        if ($id === null) {

        } else {
            // Retrieve one with id
        }
    }

    public function create(Request $request) {

    }

    public function update(Request $request) {

    }

    public function remove($id) {

    }
}
