<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';

const BR = '<br> <br> <br>';


$bike = new Bicycle('red');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo BR;

$Bugatti = new Car('blue', 1, 'pedals');

echo $Bugatti->forward();
echo '<br> Vitesse de la voiture : ' . $Bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $Bugatti->brake();
echo '<br> Vitesse de la voiture : ' . $Bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $Bugatti->brake();
echo '<br>' . $Bugatti->start();
echo '<br>' . $Bugatti->brake();
