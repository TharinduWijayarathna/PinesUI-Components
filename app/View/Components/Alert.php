<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $headline;
    public string $message;

    public function __construct(string $type = 'info', string $headline, string $message)
    {
        $this->type = $type;
        $this->headline = $headline;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }
}
