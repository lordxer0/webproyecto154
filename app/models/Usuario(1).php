<?php

    require_once '../db/Connection.php';

    class Usuario{
        private $id;
        private $nombre;
        private $direccion;
        private $telefono;
        private $correo;
                

        public function registro(){
            $sql="insert into usuarios values ('$this->id',
            '$this->nombre',
            '$this->direccion',
            '$this->telefono',
            '$this->correo')";
            $con=new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }

        public function consultar(){
            $sql="select * from usuarios";
            $con= new Connection();
            $rs= $con -> query($sql);
            $con -> close();
            return $rs;
        }
        
        public static function buscarPorId($id){
            $sql="select * from usuarios where id =$id";
            $con= new Connection();
            $rs=$con->query($sql);
            $con->close();
            return $rs;
        }

        public function actualizar(){
            $sql="update usuarios set nombre='$this->nombre',
            correo='$this->correo',
            telefono='$this->telefono',
            direccion='$this->direccion'
            where id='$this->id'";
            $con= new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }

        public static function eliminar($id){
            $sql="delete from usuarios where id='$id'";
            $con= new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }
    }
?>