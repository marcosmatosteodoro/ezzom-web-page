<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HrColorComponent extends Component
{
    public $categoryCodeName;
    public $orientation;
    public $size;
    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($categoryCodeName="", $orientation, $size)
    {
        $this->categoryCodeName = $categoryCodeName;
        $this->orientation = $orientation;
        $this->size = $size;
        $this->class = $this->buildClass();
    }   

    private function buildClass()
    {
        $sizeClass = "br-$this->orientation-$this->size";
        
        switch ($this->categoryCodeName) {
            case 'esportes':
                $bg = "bg-green";
            break;

            case 'eventos':
                $bg = "bg-brown";
            break;

            case 'servicos':
                $bg = "bg-blue";
            break;

            case 'projetos':
                $bg = "bg-red";
            break;

            case 'negocios':
                $bg = "bg-yellow";
            break;
            
            default:
                $bg = "bg-white";
            break;
        }

        return "$sizeClass $bg";
    }
    
    public function render(): View|Closure|string
    {
        return view('components.shared.hr-color-component', ['class' => $this->class]);
    }
}
