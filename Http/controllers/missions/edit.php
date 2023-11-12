<?php 
use Core\App;
use Core\Session;
USE Core\Droplist;
$db = App::resolve("Core\Database");


// we check that the spaceship is there

$mission = $db->query("SELECT * FROM missions WHERE id = :id",
[
    'id' => $_GET['id']
])->find();

    
$mission["planet"]= $db->query("SELECT nom FROM planetes WHERE id = :id",["id"=>$mission["planet_id"]])->find()["nom"];
$mission["spaceship"] = $db->query("SELECT identifiant FROM vaisseaux WHERE id = :id",["id"=>$mission["vaisseau_id"]])->find()["identifiant"];
$mission["astronauts"] = $db->query("SELECT 
nom , id
FROM astronautes WHERE vaisseau_id = :vid",[
    "vid"=>$mission["vaisseau_id"]
])->get();
    





// here we get the general information
$vaisseaux = $db->query("SELECT id,identifiant FROM vaisseaux")->get();
$planetes = $db->query("SELECT id, nom FROM planetes")->get();
$astronautes = $db->query("SELECT id,nom FROM astronautes")->get();

foreach($mission['astronauts'] as $astr){
    $db->query("UPDATE astronautes SET
    vaisseau_id = :vid WHERE id = :id
    ",[
        'vid' =>  null,
        'id' => $astr['id']
    ]);
}

view("missions/edit.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => $mission,
    "state" => Droplist::MISSION_STATE,
    "level" => Droplist::MISSSION_LEVEL,
    "vaisseaux" => $vaisseaux,
    "planetes" => $planetes,
    "astronautes" => $astronautes
]);