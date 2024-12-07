<?php

namespace APP\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    // Método genérico para obtener registros de una tabla
    private function getTableData($tableName)
    {
        $query = $this->db->table($tableName)->get();
        $result = $query->getResult();

        // Retornar datos si existen registros
        return count($result) >= 1 ? $result : NULL;
    }

    // Método para zapatos
    public function zapatos_lst()
    {
        return $this->getTableData('zapatos');
    }

    // Método para pedidos
    public function pedidos_lst()
    {
        return $this->getTableData('pedidos');
    }
}
