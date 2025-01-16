<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use App\TechnologyEnum;

class FrontEndController extends Controller
{

    protected About $about;
    protected Category $category;
    protected Project $project;

    public function __construct(About $about, Category $category, Project $project)
    {
        $this->about = $about;
        $this->category = $category;
        $this->project = $project;
    }

    public function index()
    {
        $about = $this->about->first();
        $categories = $this->category->all();
        $projects = $this->project->all();
        $frontendTechnologies = Technology::where('category', TechnologyEnum::FRONTEND)->get();
        $backendTechnologies = Technology::where('category', TechnologyEnum::BACKEND)->get();

        return view('frontend.index', compact('about', 'categories', 'projects', 'frontendTechnologies', 'backendTechnologies'));
    }

}
