<?php
//Autoloader
spl_autoload_register(function($class){
    
    $file = str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) require $file; 
});

use Safari\Animaux\Animal;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;
use Safari\Parc\Enclos;

//Objet
$enclos = new Enclos(3);

//Créer
$lion = new Lion("Simba", 150);

$perroquet1 = new Perroquet("Rio", 2);
$perroquet2 = new Perroquet("Jago", 3);
$perroquet3 = new Perroquet("Nino", 5); //animal en trop pour faire le test

//Action

echo $enclos->ajouterAnimal($lion) . "<br>";
echo $enclos->ajouterAnimal($perroquet1) . "<br>";
echo $enclos->ajouterAnimal($perroquet2) . "<br>";
echo $enclos->ajouterAnimal($perroquet2) . "<br>";

?>