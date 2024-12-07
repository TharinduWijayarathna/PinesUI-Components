<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public string $type;
    public string $label;

    public function __construct(string $type = 'default', string $label)
    {
        $this->type = $type;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.badge');
    }
}
