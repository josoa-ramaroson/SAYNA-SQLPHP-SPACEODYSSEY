<?php 
use Core\Session;
use Core\Droplist;
use Http\Model;
use Core\App;

$db = App::resolve("Core\Database");
$vaisseaux = $db->query("SELECT identifiant FROM vaisseaux")->get();


view("astronautes/create.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old"),
    "disponibility" => Droplist::DISPONIBILITY,
    "health" => Droplist::HEALTH_STATE,
    "vaisseaux"=> $vaisseaux
]);