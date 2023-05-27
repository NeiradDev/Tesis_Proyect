<?php
require('BaseController.php');

class LoginController extends BaseController
{
    public function init()
    {
        // Lógica y procesamiento específico para la página de inicio

        // Renderizar la vista correspondiente
        $this->view('login');
    }
}
