<?php

namespace App\View\Components;

use Illuminate\View\Component;

class demos extends Component
{
    public $img;
    public $title;
    public $description;
    public $type;
    public $link;

    /**
     * Create a new component instance.
     *
     * @param string $img
     * @param string $title
     * @param string $description
     * @param string $type
     * @param string $link
     * @return void
     */
    public function __construct($img, $title, $description, $type, $link)
    {
        $this->img = $img;
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.demos');
    }
}
