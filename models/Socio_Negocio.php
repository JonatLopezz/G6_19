<?php

    class Socios extends Conectar{

        public function get_socios(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_socio_negocio ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_socio($id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_socio_negocio WHERE ID = ? ";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC); 
        }
        
        public function insert_socio($nombre, $razonsocial, $direccion, $tiposocio, $contacto, $email, $fechacreado, $estado, $telefono){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_socio_negocio(ID,NOMBRE,RAZON_SOCIAL,DIRECCION,TIPO_SOCIO,CONTACTO,EMAIL,FECHA_CREADO,ESTADO,TELEFONO)
            VALUES (NULL,?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $nombre);
            $sql->bindvalue(2, $razonsocial);
            $sql->bindvalue(3, $direccion);
            $sql->bindvalue(4, $tiposocio);
            $sql->bindvalue(5, $contacto);
            $sql->bindvalue(6, $email);
            $sql->bindvalue(7, $fechacreado);
            $sql->bindvalue(8, $estado);
            $sql->bindvalue(9, $telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }    

        public function update_socio($id,$nombre,$razonsocial, $direccion, $tiposocio, $contacto, $email, $fechacreado, $estado, $telefono){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_socio_negocio SET NOMBRE=?, RAZON_SOCIAL=?, DIRECCION=?, TIPO_SOCIO= ?, CONTACTO=?, EMAIL=?, FECHA_CREADO=?, ESTADO=?, TELEFONO=? WHERE ID = ?;";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $nombre);
            $sql->bindvalue(2, $razonsocial);
            $sql->bindvalue(3, $direccion);
            $sql->bindvalue(4, $tiposocio);
            $sql->bindvalue(5, $contacto);
            $sql->bindvalue(6, $email);
            $sql->bindvalue(7, $fechacreado);
            $sql->bindvalue(8, $estado);
            $sql->bindvalue(9, $telefono);
            $sql->bindvalue(10, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC); 
        }    

        public function delete_socio($id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="DELETE FROM ma_socio_negocio WHERE ID =?";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC); 
        }

    }
?>