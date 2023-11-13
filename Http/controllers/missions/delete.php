<?php 


use Core\App;

$db = App::resolve("Core\Database");

$vaisseau = $db->query("SELECT vaisseau_id FROM missions WHERE id = :id",[
    'id'=>$_POST['id'],
])->find()['vaisseau_id'];


$db->query("UPDATE astronautes SET
vaisseau_id = :vid WHERE vaisseau_id = :id
",[
    'vid' =>  null,
    'id' => $vaisseau
]);

// otherwise let's store the new spaceship 

$db->query("DELETE FROM missions WHERE id = :id",[
    'id'=>$_POST['id'],
]);

header('location: /missions');