<?php 
use Core\App;
USE Core\Droplist;
$db = App::resolve("Core\Database");


// we check that the spaceship is there
$planet = $db->query("SELECT * FROM planetes WHERE id=:id",[ 'id'=>$_GET['id']])->find();


$old = [
    'id' => $planet['id'],
    'name' => $planet['nom'],
    'circumference'=> $planet['circonference'],
    'distance'=>$planet['distance_terre'],
    'viability' => $planet['viabilite']
]
;


view("planetes/edit.view.php",[
    'old'=>$old ,
    'viabilite' => Droplist::VIABILITE
]);