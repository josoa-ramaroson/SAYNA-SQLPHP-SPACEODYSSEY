<?php
use Core\Validator;
use Core\Session;
use Core\App;

$db = App::resolve("Core\Database");




$errors = [];

// verify that the identifier is not null 
if ( !Validator::string($_POST['identifier'], 1, 100)) {
    // $errors['identifier'] = 'An Identifier of no more than 100 characters is required.';
    $errors['identifier'] = $_POST['identifier'];

}
// verify that the weight is valid number
if(!is_numeric($_POST['weight'])){
    $errors['weight'] = "Invalid weight, please give a valid numeric value";
}
// if we have errors, get back to creation form
if (!empty($errors)) {
    Session::flash("errors",$errors);
    Session::flash("old", $_POST);
    header("location: /spaceships/edit");
}


// otherwise let's store the new spaceship 

$db->query("UPDATE vaisseaux set identifiant = :identifiant,etat = :etat, status = :status,poids_max = :weight WHERE id = :id",[
    'id'=>$_POST['id'],
    'identifiant' => $_POST['identifier'],
    'etat' => $_POST['state'],
    'status' => $_POST['status'],
    'weight' => (doubleval($_POST['weight']) == 0) ? null : doubleval(($_POST['weight']))
]);

header('location: /spaceships');