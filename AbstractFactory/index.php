<?php

# Animal Fazenda
$farmAnimal = new FarmAnimalFactory();
$farmAnimal->createAnimal('Farm', 'Dog');
$animal = $farmAnimal->bringAnimal();

# Animal Selva
$jungleAnimal = new JungleAnimalFactory();
$jungleAnimal->createAnimal('Jungle', 'Parrot');
$animal = $jungleAnimal->bringAnimal();

?>