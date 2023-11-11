<?php 


use Core\App;

$db = App::resolve("Core\Database");


// otherwise let's store the new spaceship 

$db->query("DELETE FROM astronautes WHERE id = :id",[
    'id'=>$_POST['id'],
]);

header('location: /astronauts');