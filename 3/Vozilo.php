<?php

namespace Amplitudo;

require_once 'Movable.php';

use Amplitudo\Movable;

abstract class Vozilo implements Movable
{
    static protected $brojVozila = 0;

    protected $naziv;
    public $godiste;
    protected $x;

    public function __construct($naziv, $godiste)
    {
        $this->naziv = $naziv;
        $this->godiste = $godiste;
        Vozilo::$brojVozila += 1;
    }

    public static function ukupanBrojVozila()
    {
        return Vozilo::$brojVozila;
    }

    public abstract function napraviPuniNaziv();

    public function sayHello()
    {
        echo "<h1>" . $this->__toString() . "</h1>";
    }

    public function __toString()
    {
        return "Zdravo, ja sam vozilo {$this->naziv} 
                 i ja sam godiste {$this->godiste}.";
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }

    public function idiNaprijed($daljina)
    {
        $this->x += $daljina;
    }

    public function idiNazad($daljina)
    {
        // TODO: Implement idiNazad() method.
    }
}
