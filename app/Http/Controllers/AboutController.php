<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $about->only('description');

        $about->update($request->all());

        return redirect()->route('about.index')->with('success', 'Sobre atualizado com sucesso!');
    }
}
