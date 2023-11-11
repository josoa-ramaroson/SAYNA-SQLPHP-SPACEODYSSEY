<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$astronautes = $db->query("SELECT a.id,a.nom,
a.etat_sante,
a.taille,
a.poids,
a.annee_experience,
a.disponibilite,
v.identifiant
FROM astronautes a JOIN vaisseaux v ON v.id = a.vaisseau_id 
ORDER BY 
a.nom")->get();

view("astronautes/show.view.php",[
    'astronautes' => $astronautes
]);