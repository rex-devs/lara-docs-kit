<?php

namespace RexDevs\LaraDocsKit\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaData extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $matter = [],
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('lara-docs-kit::components.meta-data');
    }
}
