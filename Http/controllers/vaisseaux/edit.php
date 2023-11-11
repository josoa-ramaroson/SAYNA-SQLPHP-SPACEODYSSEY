<?php 
use Core\App;
USE Core\Droplist;
$db = App::resolve("Core\Database");


// we check that the spaceship is there
$vaisseau = $db->query("SELECT * FROM vaisseaux WHERE id=:id",[ 'id'=>$_GET['id']])->find();
$old = [
    'id' => $vaisseau['id'],
    'identifier' => $vaisseau['identifiant'],
    'state'=> $vaisseau['etat'],
    'status'=>$vaisseau['status'],
    'weight' => $vaisseau['poids_max']
]
;
view("vaisseaux/edit.view.php",[
    'old'=>$old ,
    "state" => Droplist::STATE,
    'status' => Droplist::STATUS
]);