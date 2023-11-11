<?php 

use Http\Model;
use Core\App;
$db = App::resolve("Core\Database");

$missions = $db->query("SELECT * FROM missions ORDER BY 3")->get();
view("missions/show.view.php",[
    'missions' => $missions
]);