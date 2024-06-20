<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public $menuItems ;
    public $liItems ;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menuItems  = [
            ['title'=> 'Menu 1', 'menu'=> 'menu1'],
            ['title'=> 'Menu 2', 'menu'=> 'menu2'],
            ['title'=> 'Menu3', 'menu'=> 'menu3'],
        ];
        $this->liItems  = [
            ['name'=> 'facebook', 'path'=> '/facebook.svg','width'=>'18px', 'height'=>'18px'],
            ['name'=> 'instagram', 'path'=> '/instagram.svg','width'=>'19px', 'height'=>'19px'],
            ['name'=> 'youtube', 'path'=> '/youtube.svg','width'=>'20px', 'height'=>'14px'],
            ['name'=> 'tiktok', 'path'=> '/tiktok.svg','width'=>'15.68px', 'height'=>'18px'],
            ['name'=> 'mic', 'path'=> '/mic.svg','width'=>'13.3px', 'height'=>'19px'],
            ['name'=> 'linkedin', 'path'=> '/linkedin.svg','width'=>'18px', 'height'=>'18px'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-component', [
            'menuItems ' => $this->menuItems,
            'liItems ' => $this->liItems,
        ]);
    }
}
