<?php 

    require '../../Private/php/conection.php';
    require '../../Private/php/register.php';
    require '../../Private/php/updateProcess.php';


    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    echo $_GET['page'];

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

    } else if ($action =="updateFinal") {

        $conection = new Conection();
        $register = new Register();
        $updateProcess = new UpdateProcess($conection, $register);
        $updateProcess->updateFinal();

    } else if ($action == "deleteProcess") {

        if (isset($_GET['codigo'])) {
            $codigo = $_GET['codigo'];
        }
        $conection = new Conection();
        $register = new Register();
        $updateProcess = new UpdateProcess($conection, $register);
        $_SESSION['codigo'] = $codigo;
        $updateProcess->delete();

    }
    

?>