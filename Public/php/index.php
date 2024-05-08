<?php 

    session_start();

    if (isset($_GET['results'])) {
        $results = unserialize(urldecode($_GET['results']));
    } else {
        $results = ['results' => [], 'totalPages' => 1];
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>~VOLK LMS</title>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="file-path">
        <span class="span-first-path">Administração / </span>
        <a href="index.php"><span class="span-last-path">Fila de Processos</span></a>
    </div>

    <div class="container-filter">
        <form method="post" action="autentication.php?action=filter" class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Filtro:</span>
            </div>
            <input type="text" class="form-control" aria-label="Filtro" aria-describedby="basic-addon3" name="filter">
            <div class="input-group-append ms-2">
                <button class="btn button-filter" type="submit">Ok</button>
            </div>
        </form>

        <?php if (isset($_SESSION['error'])) { ?>
        <div>
            <span class="span-filter-error text-danger"><?php echo $_SESSION['error']; ?></span>
        </div>
        <?php unset($_SESSION['error']); 
        } 
        if (isset($_SESSION['updateProcess'])) {?>
        <div>
            <span class="span-filter-updateProcess text-success"><?php echo $_SESSION['updateProcess']; ?></span>
        </div>
        <?php unset($_SESSION['updateProcess']); } ?>


        <a href="novoProcesso.php" class="btn button-new-process">Novo Processo</a>
    </div>


    <div class="container-table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-1">Codigo</th>
                    <th scope="col-2">Nome</th>
                    <th scope="col-1">Pessoa</th>
                    <th scope="col-2">Unidade</th>
                    <th scope="col-1">Status</th>
                    <th scope="col-2">Data Criação</th>
                    <th scope="col-2">Data Modificação</th>
                    <th scope="col-1">Opções</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $totalPages = 1;
                    if (!empty($results) && isset($results['results'])) {
                        foreach ($results['results'] as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['codigo'] . "</td>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['pessoa'] . "</td>";
                            echo "<td>" . $row['unidade'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . date('Y-m-d H:i:s', strtotime($row['datacriacao'])) . "</td>";
                            echo "<td>" . date('Y-m-d H:i:s', strtotime($row['datamodificacao'])) . "</td>";
                            echo "<td>
                                <a href='autentication.php?action=editProcess&codigo=".$row['codigo']."'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-search me-3' viewBox='0 0 16 16'>
                                    <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0'/>
                                </svg></a>
                                <a href='autentication.php?action=deleteProcess&codigo=".$row['codigo']."'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z'/>
                                </svg></a>
                            </td>";
                            echo "</tr>";
                        }

                        $totalPages = $results['totalPages'];

                    } else {
                        $totalPages = 1;
                    }
                ?>

                <tr>
                    <th scope="col-1">Codigo</th>
                    <th scope="col-2">Nome</th>
                    <th scope="col-1">Pessoa</th>
                    <th scope="col-2">Unidade</th>
                    <th scope="col-1">Status</th>
                    <th scope="col-2">Data Criação</th>
                    <th scope="col-2">Data Modificação</th>
                    <th scope="col-1">Opções</th>
                </tr>
            </tbody>

        </table>

        <div class="container-pagination">
            <nav aria-label="...">
                <ul class="pagination">
                <li class="page-item">
                        <a class="page-link" href="#">Primeira</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Anterior</a>
                    </li>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                                for ($count = 1; $count <= $totalPages; $count++) { 
                                    echo "<li class='page-item " . ($count == $page ? 'active' : '') . "'><a class='page-link' href='./index.php?page={$count}'>{$count}</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                    <li class="page-item">
                        <a class="page-link" href="#">Próxima</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Última</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>



    <!-- script -->
    <script src="../javascript/jquery-3.7.1.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>