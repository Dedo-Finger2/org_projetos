<?php
    require_once("Controllers/Controller.php");
    require_once("Helpers/Helper.php");
    require_once("Models/Model.php");

    use Controller\User;

    $usuario = new User();
    $usuario->index();