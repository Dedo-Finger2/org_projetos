<?php
    require_once("../Helpers/Helper.php");
    require_once("../Controllers/Controller.php");

    use Helper\formatDate;
    use Controller\User;

    echo Helper\formatDate("2023/03/28");
    echo "<hr>";
    $usuario = new User();
    $usuario->index();
