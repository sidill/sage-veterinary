<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Delete extends Component
{
    public $route;
    public $title;
    public $name;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $route, $title, $name)
    {
        $this->id = $id;
        $this->route = $route;
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.delete');
    }
}
