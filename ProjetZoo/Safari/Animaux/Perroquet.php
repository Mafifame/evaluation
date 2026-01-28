<?php
namespace Safari\Animaux;

class Perroquet extends Animal{
    public function crier(){
        return "Coco veut un gâteau !". $this->nom ."sifle";
    }

    public function voler(){
        return "Le perroquet s'envole.";
    }
}

?>