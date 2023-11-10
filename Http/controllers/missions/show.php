<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$missions = $db->query("SELECT * FROM missions")->get();
view("missions/show.view.php",[
    'missions' => $missions
]);