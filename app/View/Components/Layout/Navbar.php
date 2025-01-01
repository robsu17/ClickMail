<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            ['key' => '/', 'label' => 'Campanhas', 'route' => '/'],
            ['key' => '/listas', 'label' => 'Listas', 'route' => '/listas'],
            ['key' => '/templates', 'label' => 'Templates', 'route' => '/templates']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar');
    }
}
