<?php
namespace Safari\Animaux;

class Animal{
    protected $nom;
    protected $poids;
    protected $estMalade = false;

    public function __construct($n, $p){
        $this->nom = $n;
        $this->poids = $p;
    }
    
    public function manger(){
        return "L'animal mange.";
    }

    public function seSoigner(){
        return "Passe". $this->estMalade ;
    }
    
    public function crier(){
        return "L'animal pousse un cri générique, Wouf!";
    }

     public function getNom(){
        return $this->nom;
    }
}

?>