<?php
//programa para imprimir mensaje con aplicando POO en PHP
//creado por Sergio González Pérez
//fecha 08/septiembre/2025
//appweb2.php
class alumno
{
    public $nombre= "Sergio";
    public $paterno= "González";
    public $materno= "Pérez";
    public function imprimirmensaje()
    {
        print "Mi nombre es:<br>";
        print $this->nombre."<br>";
        print $this->paterno."<br>";
        print $this->materno."<br>";
    }
}
$obj=new alumno;
$obj->imprimirmensaje();
?>
