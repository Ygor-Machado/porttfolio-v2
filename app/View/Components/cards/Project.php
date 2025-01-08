<?php

namespace App\View\Components\cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{

    public $name;
    public $image;
    public $description;
    public $githubLink;
    public $deployLink;
    public $projectId;
    public $categories;

    public function __construct($name, $image, $description, $githubLink, $deployLink, $projectId, $categories)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->githubLink = $githubLink;
        $this->deployLink = $deployLink;
        $this->projectId = $projectId;
        $this->categories = $categories;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.project');
    }
}
