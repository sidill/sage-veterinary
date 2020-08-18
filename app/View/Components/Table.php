<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $items;
    public $name;
    public $description;
    public $parameters;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $name, $description = null, $parameters = [])
    {
        $this->items = $items;
        $this->name = $name;
        $this->description = $description;
        $this->parameters = $parameters;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
