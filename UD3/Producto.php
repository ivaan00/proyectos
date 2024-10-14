<?php

    class Producto{
        const IVA=0.21;
        private $codigo;

        private static $numProductos=0;

        public function __construct($codigo)
        {
            $this->codigo=$codigo;
            self::$numProductos++;
        }
        public static function mostrarResumen(){
            echo "El producto ". $this->codigo . "es el número " . self::$numProductos;
        }
    }
    $prod1=new Producto("Peras");
    $prod2=new Producto("limones");
    $prod3=new Producto("Fresas");
    $prod3->mostrarResumen();
?>