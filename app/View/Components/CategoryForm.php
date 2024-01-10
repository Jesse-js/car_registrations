<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryForm extends Component
{
    public string $name;
    public string $description;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-form');
    }
}
