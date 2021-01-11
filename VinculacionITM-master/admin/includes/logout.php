<?php

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: http://localhost/carrito/admin ");

?>