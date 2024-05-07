<?php 

    require '../../Private/php/conection.php';
    require '../../Private/php/register.php';
    require '../../Private/php/updateProcess.php';


    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if ($action =="updateProcess") {

        $conection = new Conection();
        $register = new Register();

        foreach ($_POST as $key => $value) {
            if (property_exists($register, $key)) {
                $register->$key = $value;
            }
        }

        $updateProcess = new UpdateProcess($conection, $register);
        $updateProcess->create();

    } else if ($action =="editProcess") {
        $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : $codigo;
        $_SESSION['codigo'] = $codigo;

        $conection = new Conection();
        $register = new Register();

        $updateProcess = new UpdateProcess($conection, $register);
        $results = $updateProcess->update();
        header("Location: ./editProcess.php");

    } else if ($action =="filter") {

        $conection = new Conection();
        $register = new Register();

        $updateProcess = new UpdateProcess($conection, $register);
        $results = $updateProcess->read();
        header("Location: ./index.php?results=" . urlencode(serialize($results)));

        //limitado para postar apenas 10

    } 
    

?>