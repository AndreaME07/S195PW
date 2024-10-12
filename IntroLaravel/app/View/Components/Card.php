<?php

namespace App\View\Components;
/*c minuscula la vista y C mayuscula el componenetes*/
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public $titulo;
    public $encabezado;
    public $textoBoton;

    public function __construct($titulo,$encabezado,$textoBoton)
    {
        $this->titulo=$titulo;
        $this->encabezado=$encabezado;
        $this->textoBoton=$textoBoton;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}