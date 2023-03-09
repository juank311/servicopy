<?php

class Registro
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
        $this->db->query("SELECT * FROM usuarios");
        return $this->db->registros();
    }

    public function mostrar_rubros()
    {
        $this->db->query("SELECT * FROM rubrogasto");
        $datos = $this->db->registros();

        return ($datos);
    }

    public function mostrar_gastos_hoy()
    {
        $this->db->query("SELECT g.id, g.valor_gasto, r.nombre AS rubro, g.date_creation, g.observacion
        FROM gastos g
        INNER JOIN rubrogasto r ON g.id_rubro = r.id
        WHERE DATE(g.date_creation) = DATE(NOW())");
        $datos = $this->db->registros();

        return ($datos);
    }


    public function agregarRegistro($datos)
    {
        if (isset($datos['valor_venta']) && $datos['valor_venta'] != "" && $datos['valor_gasto'] == "" && $datos['id_rubro'] == "8") {
            $this->db->query('INSERT INTO ventas (valor_venta) 
            VALUES (:valor_venta)');
            //vinculacion de datos
            $this->db->bind('valor_venta', $datos['valor_venta']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } elseif (isset($datos['valor_venta']) && $datos['valor_venta'] !== "" && $datos['valor_gasto'] > 1) {
            $this->db->query('INSERT INTO gastos (valor_gasto, id_rubro) 
            VALUES (:valor_gasto, :id_rubro)');
            //vinculacion de datos
            $this->db->bind('valor_gasto', $datos['valor_gasto']);
            $this->db->bind('id_rubro', $datos['id_rubro']);

            #ejecutar la consulta 
            if ($this->db->execute()) {
                $this->db->query('INSERT INTO ventas (valor_venta) 
            VALUES (:valor_venta)');
                //vinculacion de datos
                $this->db->bind('valor_venta', $datos['valor_venta']);
                if ($this->db->execute()) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            };
        } else {
            return false;
        }
    }
    public function agregarGasto($datos)
    {
        $this->db->query('INSERT INTO gastos (valor_gasto, id_rubro, observacion) 
        VALUES (:valor_gasto, :id_rubro, :observacion)');
        //vinculacion de datos
        $this->db->bind('valor_gasto', $datos['valor_gasto']);
        $this->db->bind('id_rubro', $datos['id_rubro']);
        $this->db->bind('observacion', $datos['observacion']);

        #ejecutar la consulta 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
