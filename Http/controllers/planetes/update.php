<?php
use Core\Validator;
use Core\Session;
use Core\App;

$db = App::resolve("Core\Database");

$errors = [];
// verify that the name is not null 
if ( !Validator::string($_POST['name'], 1, 100)) {
    // $errors['identifier'] = 'An Identifier of no more than 100 characters is required.';
    $errors['name'] = $_POST['name'];

}
// verify that the circumgerence and distance is valid number
if(!(is_numeric($_POST['circumference'])  || is_numeric($_POST['distance']) )){
    $errors['circumference'] = "Invalid input, please give a valid numeric value";
}
// if we have errors, get back to creation form
if (!empty($errors)) {
    Session::flash("errors",$errors);
    Session::flash("old", $_POST);
    header("location: /planets/create");
}


// otherwise let's store the new planets 
$db->query("UPDATE planetes set nom = :name,circonference = :circumference, distance_terre = :distance,viabilite = :viabilite WHERE id = :id",[
    'id'=>$_POST['id'],
    'name' => $_POST['name'],
    'circumference' => $_POST['circumference'],
    'distance' => $_POST['distance'],
    'viabilite' => $_POST['viability']
]);

header('location: /planets');