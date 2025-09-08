<?php
//programa para imprimir mensaje con aplicando POO en PHP
//creado por Sergio González Pérez
//fecha 08/septiembre/2025
//app2.php
class amigos
{
    public $ami1= "Nombre de amig@ 1";
    public $ami2= "Nombre de amig@ 2";
    public $ami3= "Nombre de amig@ 3";
    public $ami4= "Nombre de amig@ 4";
    public $ami5= "Nombre de amig@ 5";
    public function imprimiramigos()
    {
        print "Mi lista de amig@s es:<br>";
        print $this->ami1."<br>";
        print $this->ami2."<br>";
        print $this->ami3."<br>";
        print $this->ami4."<br>";
        print $this->ami5."<br>";

    }
}
$obj=new amigos;
$obj->imprimiramigos();
?>