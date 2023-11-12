<?php
use Core\App;

$db = App::resolve("Core\Database");

$total_mission = $db->query("SELECT COUNT(*) as t FROM missions")->find()['t'];

$missions = $db->query("SELECT *  FROM missions WHERE etat = 'NEW' OR etat = 'IN PREPARATION' OR etat = 'IN PROGRESS'")->get();

foreach($missions as $k=>$mission){
    
    $missions[$k]["planet"]= $db->query("SELECT nom FROM planetes WHERE id = :id",["id"=>$mission["planet_id"]])->find()["nom"];
    $missions[$k]["spaceship"] = $db->query("SELECT identifiant FROM vaisseaux WHERE id = :id",["id"=>$mission["vaisseau_id"]])->find()["identifiant"];
    $missions[$k]["astronauts"] = $db->query("SELECT 
    nom 
    FROM astronautes WHERE vaisseau_id = :vid",[
        "vid"=>$mission["vaisseau_id"]
    ])->get();
    

}

$completed_mission = $db->query("SELECT COUNT(*) as t FROM missions WHERE
etat = 'FINISHED'")->find()['t'];

$total_vaisseau = $db->query("SELECT COUNT(*) as t FROM vaisseaux ")->find() ['t'];

$total_astronauts = $db->query("SELECT COUNT(*) as t FROM astronautes ")->find() ['t'];
view("index.view.php", [
    'heading' => "Home",
    'total_missions'=>$total_mission,
    'completed_mission'=> $completed_mission,
    "total_vaisseau" => $total_vaisseau,
    'total_astronauts' => $total_astronauts,
    'missions' => $missions 
]);
