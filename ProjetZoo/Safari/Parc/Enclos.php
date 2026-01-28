<?php
namespace Safari\Parc;
    
class Enclos{

    private array $animaux = [];
    private int $capaciteMax;
    private string $proprete = "Propre";

    public function __construct($cm)
    {
        $this->capaciteMax = $cm;
    }

    public function ajouterAnimal($nouveauNom){
        if (count($this->animaux) >= $this->capaciteMax) {
            echo "Erreur : Enclos plein !";
        }else{
            $this->animaux[] = $nouveauNom;
            echo "Bienvenue à {$nouveauNom->getNom()}";
        }
    }

    public function entretenir(){
        return "Nettoyage en cours...". $this->proprete ;
    }

    public function visiteGuidee(){
        return "Voici les animaux de l'enclos :";
        foreach ($this->animaux as $animal) {
            $animal->crier();
        }
    }

}
?>
