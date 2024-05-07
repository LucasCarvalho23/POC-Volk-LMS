<?php 

    require '../../Private/php/conection.php';
    require '../../Private/php/register.php';
    require '../../Private/php/updateProcess.php';

    $conection = new Conection();
    $register = new Register();

    foreach ($_POST as $key => $value) {
        if (property_exists($register, $key)) {
            $register->$key = $value;
        }
    }

    $updateProcess = new UpdateProcess($conection, $register);
    $updateProcess->create();

?>