<?php

namespace App\View\Components\NavBar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class NavBar extends Component
{
    /**
     * The navigation links.
     *
     * @var array
     */
    public array $links;

    /**
     * Create a new component instance.
     *
     * @param array $links
     */
    public function __construct(array $links = [])
    {
        $this->links = $links ?: $this->defaultLinks();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-bar.nav-bar');
    }

    /**
     * Get the default navigation links if none are passed.
     *
     * @return array
     */
    private function defaultLinks(): array
    {
        return [
            ['name' => 'Home', 'url' => url('/'), 'active' => $this->isActive('/')],
            ['name' => 'About', 'url' => url('/about'), 'active' => $this->isActive('/about')],
            ['name' => 'Services', 'url' => url('/'), 'active' => $this->isActive('/services')],
            ['name' => 'Contact', 'url' => url('/'), 'active' => $this->isActive('/contact')],
        ];
    }

    /**
     * Determine if the given path is the active route.
     *
     * @param string $path
     * @return bool
     */
    private function isActive(string $path): bool
    {
        return request()->is(ltrim($path, '/'));
    }
}
