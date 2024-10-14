<?php
    declare(strict_types=1);

    class Empleado{
        private string $nombre;
        private string $apellidos;
        private float $sueldo;

        public function __construct(string $nombre,string $apellido, float $sueldo){
            $this->nombre=$nombre;
            $this->apellidos=$apellido;
            $this->sueldo=$sueldo;
        }

        public function getNom():string{
            return $this->$nombre;
        }
        public function getSueldo():float{
            return $this->sueldo;
        }
        public function getApellidos():string{
            return $this->apellidos;
        }

        public function setNom(string $nombre){
            return $this->nombre;
        }
        public function setSueldo(float $sueldo){
            return $this->sueldo;
        }
        public function setApellidos(string $apellidos){
            return $this->apellidos;
        }

        public function getNombreCompleto():string{
            return $this->nombre . " " . $this->apellidos;
        }
        public function debePagarImpuestos():bool{
            return $this->sueldo >3333;
        }
    }

    $emp1 = new Empleado("Peppa", "Pig", 4444);
    $emp1->getNombreCompleto();
    echo $emp1->debePagarImpuestos()?"Debe pagar impuestos":"No debe pagar impuestos";
?>