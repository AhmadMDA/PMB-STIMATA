<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HorizontalNavbar extends Component
{
    public $items;
    public $activeBackgroundColor;
    public $activeTextColor;
    public $defaultActiveItem;

    /**
     * Create a new component instance.
     *
     * @param array $items
     * @param string $activeBackgroundColor
     * @param string $activeTextColor
     * @param int $defaultActiveItem
     * @return void
     */
    public function __construct(array $items, string $activeBackgroundColor, string $activeTextColor, int $defaultActiveItem = 0)
    {
        $this->items = $items;
        $this->activeBackgroundColor = $activeBackgroundColor;
        $this->activeTextColor = $activeTextColor;
        $this->defaultActiveItem = $defaultActiveItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.horizontal-navbar');
    }
}