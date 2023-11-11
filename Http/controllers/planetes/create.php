<?php 
use Core\Session;
use Core\Droplist;

view("planetes/create.view.php", [
    "errors" => Session::getFlashed("errors"),
    "old" => Session::getFlashed("old"),
    "viabilite" => Droplist::VIABILITE
]);