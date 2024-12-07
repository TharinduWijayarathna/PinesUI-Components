<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DatePicker extends Component
{
    public $name;
    public $label;
    public $value;
    public $format;

    public function __construct(
        $name = '',
        $label = 'Select Date',
        $value = '',
        $format = 'M d, Y'
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->format = $format;
    }

    public function render()
    {
        return view('components.date-picker');
    }
}
