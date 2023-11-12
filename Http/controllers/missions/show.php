<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$missions = $db->query("SELECT * FROM missions ORDER BY 3")->get();

foreach($missions as $k=>$mission){
    
    $missions[$k]["planet"]= $db->query("SELECT nom FROM planetes WHERE id = :id",["id"=>$mission["planet_id"]])->find()["nom"];
    $missions[$k]["spaceship"] = $db->query("SELECT identifiant FROM vaisseaux WHERE id = :id",["id"=>$mission["vaisseau_id"]])->find()["identifiant"];
    $missions[$k]["astronauts"] = $db->query("SELECT 
    nom 
    FROM astronautes WHERE vaisseau_id = :vid",[
        "vid"=>$mission["vaisseau_id"]
    ])->get();
    

}

view("missions/show.view.php",[
    'missions' => $missions
]);