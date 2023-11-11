<?php 
use Core\Session;
use Core\Droplist;

view("vaisseaux/create.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old"),
    "state" => Droplist::STATE,
    'status' => Droplist::STATUS
]);