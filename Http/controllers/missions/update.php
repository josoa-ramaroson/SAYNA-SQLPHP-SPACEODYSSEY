<?php
use Core\Validator;
use Core\Session;
use Core\App;

$db = App::resolve("Core\Database");


$errors = [];

// verify that the identifier is not null 
if ( !Validator::string($_POST['name'], 1, 100)) {
    // $errors['identifier'] = 'An Identifier of no more than 100 characters is required.';
    $errors['name'] = $_POST['name'];

}


// otherwise let's store the new spaceship 



$db->query(" UPDATE missions SET nom = :name,
description = :descr
,debut = :debut,
fin = :fin,
etat = :etat,
niveau = :niveau,
vaisseau_id = :vid,
planet_id = :pid
WHERE id = :id",
 [
    "id" => $_POST['id'],
    'name'=> $_POST['name'],
    'descr' => $_POST['description'],
    ':debut' => $_POST['begin'],
    ':fin' => $_POST['end'],
    ':etat' => $_POST['state'],
    ':niveau' => $_POST['level'],
    ":vid" => $_POST['spaceship'],
    ":pid" => $_POST['planets']
]);

foreach($_POST['astronauts'] as $astr){
    $db->query("UPDATE astronautes SET
    vaisseau_id = :vid WHERE id = :id
    ",[
        'vid' =>  $_POST['spaceship'],
        'id' => $astr
    ]);
}
header('location: /missions');