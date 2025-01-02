<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    public array $links;
    public string $currentKey;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            ['key' => 'campaigns', 'label' => 'Campanhas', 'route' => '/campaigns'],
            ['key' => 'listas', 'label' => 'Listas', 'route' => '/listas'],
            ['key' => 'templates', 'label' => 'Templates', 'route' => '/templates']
        ];

        $this->currentKey = $this->urlKeyCheck();
    }

    public function urlKeyCheck()
    {
        $url = request()->path();
        return Str::before($url, '/');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar');
    }
}
