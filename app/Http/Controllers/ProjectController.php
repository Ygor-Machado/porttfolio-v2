<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $project = Project::create($data);

        $project->categories()->attach($data['categories']);

        return redirect()->route('project.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->uploadImage($request->file('image'));
            $this->deleteOldImage($project->image);
        }

        $project->update($data);

        if (isset($data['categories'])) {
            $project->categories()->sync($data['categories']);
        }

        return redirect()->route('project.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Project $project)
    {
        $project->categories()->detach();

        if ($project->image && file_exists(public_path('img/projects/' . $project->image))) {
            unlink(public_path('img/projects/' . $project->image));
        }

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Projeto deletado com sucesso!');
    }
    private function uploadImage($image)
    {
        $imageName = md5($image->getClientOriginalName() . microtime()) . '.' . $image->extension();
        $image->move(public_path('img/projects'), $imageName);

        return $imageName;
    }

    private function deleteOldImage($imageName)
    {
        if ($imageName && file_exists(public_path('img/projects/' . $imageName))) {
            unlink(public_path('img/produtos/' . $imageName));
        }
    }

}
