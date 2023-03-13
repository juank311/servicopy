<?php

class Registro
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    #Obtiene y muestra los usuarios
    public function mostrar_usuarios()
    {
        $this->db->query("SELECT * FROM usuarios");
        return $this->db->registros();
    }

    #Obtiene y muestra las ventas del dia corriente (actual)
    public function mostrar_ventas_hoy()
    {
        $this->db->query("SELECT *
         FROM ventas v
         WHERE DATE(v.date_creation) = DATE(NOW())");
        return $this->db->registros();
    }

    #Obtiene y muestra los indices de los rubros de gastos
    public function mostrar_rubros()
    {
        $this->db->query("SELECT * FROM rubrogasto");
        $datos = $this->db->registros();

        return ($datos);
    }

    #Obtiene y muestra los indices de los provedores
    public function mostrar_proveedores()
    {
        $this->db->query("SELECT * FROM proveedores");
        $datos = $this->db->registros();

        return ($datos);
    }

    #Obtiene y muestra los gastos del dia corriente (actual)
    public function mostrar_gastos_hoy()
    {
        $this->db->query("SELECT g.id, g.valor_gasto, r.nombre AS rubro, g.date_creation, g.observacion
        FROM gastos g
        INNER JOIN rubrogasto r ON g.id_rubro = r.id
        WHERE DATE(g.date_creation) = DATE(NOW())");
        $datos = $this->db->registros();

        return ($datos);
    }

    #Obtiene y muestra las compras a proveedores del dia corriente (actual)
    public function mostrar_pagos_proveedores_hoy()
    {
        $this->db->query("SELECT pp.id, pp.valor_proveedor, p.razon, pp.observacion
           FROM pago_proveedores pp
           INNER JOIN proveedores p ON pp.id_proveedores = p.id
           WHERE DATE(pp.date_creation) = DATE(NOW())");
        $datos = $this->db->registros();

        return ($datos);
    }

    #Inserta los datos y ventas desde la dashboard
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
            $this->db->query('INSERT INTO gastos (valor_gasto, id_rubro, id_usuario) 
            VALUES (:valor_gasto, :id_rubro, :id_usuario)');
            //vinculacion de datos
            $this->db->bind('valor_gasto', $datos['valor_gasto']);
            $this->db->bind('id_rubro', $datos['id_rubro']);
            $this->db->bind('id_usuario', $_SESSION['dataUser']->id);

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
    #Inserta los gastos desde el modal si el usuario ingresa una fecha, entra por el if, de lo contrario entra por el else.
    public function agregarGasto($datos)
    {
        if (($datos['date_creation'] > 1)) {
            $this->db->query('INSERT INTO gastos (valor_gasto, id_rubro, observacion, id_usuario, date_creation) 
            VALUES (:valor_gasto, :id_rubro, :observacion, :id_usuario, :date_creation)');
            //vinculacion de datos
            $this->db->bind('valor_gasto', $datos['valor_gasto']);
            $this->db->bind('id_rubro', $datos['id_rubro']);
            $this->db->bind('id_usuario', $_SESSION['dataUser']->id);
            $this->db->bind('observacion', $datos['observacion']);
            $this->db->bind('date_creation', $datos['date_creation']);
            #ejecutar la consulta 

        } else {
            $this->db->query('INSERT INTO gastos (valor_gasto, id_rubro, observacion, id_usuario) 
            VALUES (:valor_gasto, :id_rubro, :observacion, :id_usuario)');
            //vinculacion de datos
            $this->db->bind('valor_gasto', $datos['valor_gasto']);
            $this->db->bind('id_rubro', $datos['id_rubro']);
            $this->db->bind('observacion', $datos['observacion']);
            $this->db->bind('id_usuario', $_SESSION['dataUser']->id);
        }
        #ejecutar la consulta 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
