<?php

/**
 */
class   BaseController
{
    public $framework;
    public $layout = 'main';

    public function view($vista, $datos = [])
    {
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc} = $valor;
        }

        ob_start();
        require('views/' . $vista . '.php');
        $content = ob_get_clean();

        if ($this->layout) {
            require('views/layout/' . $this->layout . '.php');
        }
    }

    public function redirect($controlador, $accion)
    {
        header("Location:index.php?controller=" . $controlador . "&action=" . $accion);
    }
}
