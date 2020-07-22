<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubHeader extends Component
{
    public $title;
    public $model;
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $model = null, $route = null)
    {
        $this->title = $title;
        $this->model = $model;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sub-header');
    }
}
