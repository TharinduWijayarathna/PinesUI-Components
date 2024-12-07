<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notice extends Component
{
    public string $title;
    public string $message;
    public string $icon;
    public string $denyText;
    public string $acceptText;
    public int $delay;

    public function __construct(
        string $title,
        string $message,
        string $icon = 'https://cdn-icons-png.flaticon.com/512/9004/9004938.png',
        string $denyText = 'Deny All',
        string $acceptText = 'Accept All',
        int $delay = 300
    ) {
        $this->title = $title;
        $this->message = $message;
        $this->icon = $icon;
        $this->denyText = $denyText;
        $this->acceptText = $acceptText;
        $this->delay = $delay;
    }

    public function render()
    {
        return view('components.notice');
    }
}
