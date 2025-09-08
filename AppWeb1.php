<?php
//programa para imprimir mensaje con aplicando POO en PHP
//Creado por Sergio González Pérez
//fecha 08/septiembre/2025
//appweb1.php
class texto
{
    public $texto1= "Hola Mundo";
    public $texto2= "Bienvenidas/os a Programación de Aplicaciones Web";
    public $texto3= "Mensaje";

    public function imprimirtextos()
    {
        print $this->texto1."<br>";
        print $this->texto2."<br>";
        print $this->texto3."<br>";
       
    }
}
$obj=new texto;
$obj->imprimirtextos();
?>