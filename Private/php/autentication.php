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

        echo ("<pre>");
        print_r($_POST);
        echo ("</pre>");

    } else if ($action =="filter") {

        $conection = new Conection();
        $register = new Register();

        $updateProcess = new UpdateProcess($conection, $register);
        $results = $updateProcess->update();
        header("Location: ./index.php?results=" . urlencode(serialize($results)));

        //limitado para postar apenas 10

    }

    

?>