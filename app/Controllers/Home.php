<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $modelHome = NULL;

    public function __construct()
    {
        $this->modelHome = model("HomeModel");
    }
    
    public function index()
    {
        // Obtener datos de productos y usuarios
        $zapatos = $this->modelHome->zapatos_lst();
        $pedidos = $this->modelHome->pedidos_lst();

        // Crear un array con ambos resultados
        $data = [
            'zapatos' => $zapatos,
            'pedidos' => $pedidos
        ];

        // Retornar como JSON
        return $this->response->setJSON($data);
    }
}
