<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$vaisseaux = $db->query("SELECT * FROM vaisseaux ORDER BY identifiant")->get();
view("vaisseaux/show.view.php",[
    'vaisseaux' => $vaisseaux
]);