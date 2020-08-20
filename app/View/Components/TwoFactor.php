<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TwoFactor extends Component
{
    public $user;
    public $google2faUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user, $google2faUrl)
    {
        $this->user = $user;
        $this->google2faUrl = $google2faUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.two-factor');
    }
}
