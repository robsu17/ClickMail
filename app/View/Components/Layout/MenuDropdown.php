<?php

namespace App\View\Components\Layout;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MenuDropdown extends Component
{
    public ?Authenticatable $user;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.menu-dropdown');
    }
}
