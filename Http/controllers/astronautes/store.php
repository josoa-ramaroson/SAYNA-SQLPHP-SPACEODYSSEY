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
// verify that the weight is valid number
if(!is_numeric($_POST['weight'])){
    $errors['weight'] = "Invalid weight, please give a valid numeric value";
}
// verify that the height is valid number
if(!is_numeric($_POST['height'])){
    $errors['height'] = "Invalid height, please give a valid numeric value";
}
// verify that the year is valid number
if(!is_numeric($_POST['year'])){
    $errors['year'] = "Invalid height, please give a valid numeric value";
}
// if we have errors, get back to creation form
if (!empty($errors)) {
    Session::flash("errors",$errors);
    Session::flash("old", $_POST);
    header("location: /astronauts/create");
}


// otherwise let's store the new spaceship 
// get the spaceship's id
$va = $db->query("SELECT id FROM vaisseaux WHERE identifiant = :identifiant",[
    "identifiant" => $_POST["spaceship"]
])->find();



// query for inserting the new astronauts

$db->query(" INSERT INTO astronautes(nom,etat_sante,taille,poids,annee_experience,disponibilite,vaisseau_id) 
VALUES (:name,:health,:height,:weight,:year,:disponibility,:spaceship)", [
    'name'=> $_POST['name'],
    'health' => $_POST['health'],
    'height' => $_POST['height'],
    'weight' => $_POST['weight'],
    'year' => $_POST['year'],
    'disponibility' => $_POST['disponibility'],
    "spaceship" => $va['id']
]);

header('location: /astronauts');