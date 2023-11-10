<?php 

use Http\Model;
use Core\App;

$db = App::resolve("Core\Database");


view("missions/show.view.php",[
    'missions' => $missions
]);