<?php 
use Core\Session;
use Core\Droplist;
use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$vaisseaux = $db->query("SELECT id,identifiant FROM vaisseaux")->get();
$planetes = $db->query("SELECT id, nom FROM planetes")->get();
$astronautes = $db->query("SELECT id,nom FROM astronautes WHERE vaisseau_id IS NULL")->get();
view("missions/create.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old"),
    "state" => Droplist::MISSION_STATE,
    "level" => Droplist::MISSSION_LEVEL,
    "vaisseaux" => $vaisseaux,
    "planetes" => $planetes,
    "astronautes" => $astronautes
]);