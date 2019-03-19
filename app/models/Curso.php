<?php

    require_once '../db/Connection.php';

    class Curso{
        private $codigo;
        private $nombre;
        private $cupo;
        private $descripcion;
        private $fechaInicio;
        private $fechaFinal;


        public function registro(){
            $sql="insert into cursos values ('$this->codigo',
            '$this->nombre',
            '$this->cupo',
            '$this->descripcion',
            '$this->fechaInicio',
            '$this->fechaFinal')";
            $con=new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }

        public function consultar(){
            $sql="select * from cursos";
            $con= new Connection();
            $rs=$con->query($sql);
            $con->close();
            return $rs;
        }

        public function actualizar(){
            $sql="update cursos set nombre='$this->nombre',
            cupo='$this->cupo',
            descripcion='$this->descripcion',
            fecha_inicio='$this->fechaInicio',
            fecha_final='$this->fechaFinal'
            where codigo='$this->codigo'";
            $con= new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }

        public static function eliminar($codigo){
            $sql="delete from cursos where codigo='$codigo'";
            $con= new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }
        

        public static function buscarPorCodigo($codigo){
                $sql="select * from cursos where codigo ='$codigo'";
                $con= new Connection();
                $rs=$con->query($sql);
                $con->close();
                return $rs;
        }

        

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */ 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

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
         * Get the value of cupo
         */ 
        public function getCupo()
        {
                return $this->cupo;
        }

        /**
         * Set the value of cupo
         *
         * @return  self
         */ 
        public function setCupo($cupo)
        {
                $this->cupo = $cupo;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of fechaInicio
         */ 
        public function getFechaInicio()
        {
                return $this->fechaInicio;
        }

        /**
         * Set the value of fechaInicio
         *
         * @return  self
         */ 
        public function setFechaInicio($fechaInicio)
        {
                $this->fechaInicio = $fechaInicio;

                return $this;
        }

        /**
         * Get the value of fechaFinal
         */ 
        public function getFechaFinal()
        {
                return $this->fechaFinal;
        }

        /**
         * Set the value of fechaFinal
         *
         * @return  self
         */ 
        public function setFechaFinal($fechaFinal)
        {
                $this->fechaFinal = $fechaFinal;

                return $this;
        }
    }
    