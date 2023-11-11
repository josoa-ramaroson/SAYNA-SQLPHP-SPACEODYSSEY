<?php 
use Core\Session;
use Core\Droplist;
use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$vaisseaux = $db->query("SELECT identifiant FROM vaisseaux")->get();
$planetes = $db->query("SELECT nom FROM planetes")->get();

view("missions/create.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old"),
    "state" => Droplist::MISSION_STATE,
    "level" => Droplist::MISSSION_LEVEL,
    "vaisseaux" => $vaisseaux,
    "planetes" => $planetes
]);