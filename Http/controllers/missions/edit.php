<?php 
use Core\App;
use Core\Session;
USE Core\Droplist;
$db = App::resolve("Core\Database");


// we check that the spaceship is there

$astronautes = $db->query("SELECT a.id
,a.nom as name,
a.etat_sante as health,
a.taille as height,
a.poids as weight,
a.annee_experience as year,
a.disponibilite as disponibility,
v.identifiant as identifier
FROM astronautes a JOIN vaisseaux v ON v.id = a.vaisseau_id WHERE a.id = :id", [
    "id"=>$_GET['id'    ]
])->find();




$vaisseaux = $db->query("SELECT identifiant FROM vaisseaux")->get();



view("astronautes/edit.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old") ?? $astronautes,
    "disponibility" => Droplist::DISPONIBILITY,
    "health" => Droplist::HEALTH_STATE,
    "vaisseaux"=> $vaisseaux
]);