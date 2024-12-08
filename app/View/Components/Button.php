<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;
    public string $color;
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $color
     * @param string $size
     */
    public function __construct(string $type = 'button', string $color = 'neutral', string $size = 'md')
    {
        $this->type = $type;
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.button');
    }
}
