<?php
namespace Safari\Animaux;

class Lion extends Animal{
    private int $niveauAgressivite;

    public function __construct($n, $p, $na=5)
    {
        parent::__construct($n, $p);
        $this->niveauAgressivite = max(1, min(10, $na));
    }

    public function crier(){
        return "ROAAAAR !". $this->nom  ."rugit férocement";
    }

    public function chasser(){
        return "Le lion part en chasse";
    }
}



?>


