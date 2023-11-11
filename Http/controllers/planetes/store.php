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
if(!(is_numeric($_POST['circumference'])  || is_numeric($_POST['distance']) )){
    $errors['circumference'] = "Invalid input, please give a valid numeric value";
}
// if we have errors, get back to creation form
if (!empty($errors)) {
    Session::flash("errors",$errors);
    Session::flash("old", $_POST);
    header("location: /planets/create");
}


// otherwise let's store the new spaceship 

$db->query("INSERT INTO planetes(nom,circonference,distance_terre,viabilite) VALUES (:nom, :circonference,:distance_terre,:viabilite)",[
    'nom' => $_POST['name'],
    'circonference' => empty($_POST['circumference'])? null : $_POST['circumference'],
    'distance_terre' => empty($_POST['distance'])? null : $_POST['distance'],
    'viabilite' => $_POST['viability'],    
]);

header('location: /planets');