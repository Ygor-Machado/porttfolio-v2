<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();

        return view('admin.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $data['icon'] = $this->uploadImage($request->file('icon'));
        }

         Technology::create($data);

        return redirect()->route('technology.index')->with('success', 'Tecnologia adicionada com sucesso!');
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $data['icon'] = $this->uploadImage($request->file('icon'));
            $this->deleteOldImage($technology->image);
        }

        $technology->update($data);

        return redirect()->route('technology.index')->with('success', 'Tecnologia atualizado com sucesso!');
    }

    public function destroy(Technology $technology)
    {
        $technology->delete();

        return redirect()->route('project.index')->with('success', 'Tecnologia deletado com sucesso!');
    }

    private function uploadImage($image)
    {
        $imageName = md5($image->getClientOriginalName() . microtime()) . '.' . $image->extension();
        $image->move(public_path('img/technologies'), $imageName);

        return $imageName;
    }

    private function deleteOldImage($imageName)
    {
        if ($imageName && file_exists(public_path('img/technologies' . $imageName))) {
            unlink(public_path('img/technologies/' . $imageName));
        }
    }
}
