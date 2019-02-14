<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Vignettes;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $userName = Auth::user()->name;
        return view('admin', ['username' => $userName]);
    }

    public function show($id = null) {
        // Get all
        if ($id === null) {
            $vignettes = Vignettes::all();
            return view('welcome', ['listAdmin' => $vignettes]);
        } else {
            // Retrieve one with id
            $vignette = Vignettes::find($id);
            return view('welcome', ['vignetteUpdateAdmin' => $vignette]);
        }
    }

    public function showForm() {
        return view('welcome', ['new' => true]);
    }

    public function create(Request $request) {
        $validateData = $request->validate([
            'legend' => 'required|max:75',
            'description' => 'required|max:255',
            'url' => 'required',
        ]);

        // Retrieve the inputs data
        $inputs = $request->input();

        $element = new Vignettes;
        $element->legend = $inputs['legend'];
        $element->description = $inputs['description'];
        $element->url = $inputs['url'];

        if ($element->save()) {
            $id = $element->id;
            return redirect('show/' . $id);
        } else {
            return redirect('/');
        }
    }

    public function update($id, Request $request) {
        $validateData = $request->validate([
            'legend' => 'required|max:75',
            'description' => 'required|max:255',
            'url' => 'required',
        ]);
        $inputs = $request->input();
        $vignette = Vignettes::find($id);
        $vignette->legend = $inputs['legend'];
        $vignette->description = $inputs['description'];
        $vignette->url = $inputs['url'];

        if ($vignette->save()) {
            $id = $vignette->id;
            return redirect('/admin/vignettes/' . $id);
        } else {
            return redirect('/');
        }
    }

    public function remove($id) {
        $vignette = Vignettes::find($id);
        if ($vignette->delete()) {
            return redirect('/');
        }
    }
}
