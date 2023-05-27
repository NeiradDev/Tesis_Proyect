<?php

class BaseController
{
    protected function view($view, $data = array())
    {
        // Cargar la vista principal que incluye el layout
        require_once BASEPATH . 'layout/main' . '.php';
    }

    protected function include($view)
    {
        // Incluir una vista específica dentro del layout
        include BASEPATH . $view . '.php';
    }

    protected function renderView($view, $data)
    {
        // Extraer los datos para utilizarlos en la vista
        extract($data);
        
        // Renderizar la vista con los datos proporcionados
        include BASEPATH . 'views/' . $view . '.php';
    }
}
