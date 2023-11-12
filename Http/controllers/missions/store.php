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


// if we have errors, get back to creation form
if (!empty($errors)) {
    Session::flash("errors",$errors);
    Session::flash("old", $_POST);
    header("location: /missions/create");
}


// otherwise let's store the new spaceship 
// get the spaceship's id



// query for inserting the new astronauts

$db->query(" INSERT INTO missions(nom,description,debut,fin,etat,niveau,vaisseau_id, planet_id) 
VALUES (:nom,:descr,:debut,:fin,:etat,:niveau,:vid,:pid)", [
    'nom'=> $_POST['name'],
    'descr' => $_POST['description'],
    'debut' => $_POST['begin'],
    'fin' => $_POST['end'],
    'etat' => $_POST['state'],
    'niveau' => $_POST['level'],
    "vid" => $_POST['spaceship'],
    "pid" => $_POST['planets']
]);

foreach ($_POST["astronauts"] as $item) {
    $db->query(" UPDATE astronautes SET vaisseau_id = :vid WHERE id  = :id",[
        "vid" => $_POST['spaceship'],
        "id" => $item
    ]);
}
header('location: /missions');    