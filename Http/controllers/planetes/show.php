<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$planetes = $db->query("SELECT * FROM planetes")->get();
view("planetes/show.view.php",[
    'planetes' => $planetes
]);