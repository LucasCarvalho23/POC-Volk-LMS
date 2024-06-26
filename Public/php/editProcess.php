<?php 

    session_start();

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
        <a  class="a-first-path" href="index.php">Fila de Processos / </a>
        <span class="span-last-path">Cadastro</span>
    </div>

    <div class="container-new-register">

        <div style="margin-bottom: 50px;">
            <button class="btn button-volklms">Integrar com VolkLMS</button>
        </div>
    
        <form action="autentication.php?action=updateFinal" method="post">

            <div class="row border-topbottom">
                <div class="col-1">
                    <span class="red-color">*</span>
                    <span>NOME</span>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['nome']; ?>" disabled>
                </div>
            </div>

            <div class="row border-bottom">
                <div class="col-1">
                    <span class="red-color">*</span>
                    <span>PESSOAS</span>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['pessoa']; ?>" disabled>
                </div>
            </div>

            <div class="row border-bottom">
                <div class="col-1">
                    <span class="red-color">*</span>
                    <span>UNIDADES</span>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['unidade']; ?>" disabled>
                </div>
            </div>

            <div class="row border-bottom">
                <div class="col-1">
                    <span class="red-color">*</span>
                    <span>STATUS</span>
                </div>
                <div class="col-5">
                    <select name="status" class="form-control" required>
                        <?php if ($_SESSION['status'] == "PROCESSADO") {?>
                            <option value="PROCESSADO" selected>PROCESSADO</option>
                            <option value="CANCELADO">CANCELADO</option>
                        <?php } else if ($_SESSION['status'] == "CANCELADO") {?>
                            <option value="PROCESSADO">PROCESSADO</option>
                            <option value="CANCELADO" selected>CANCELADO</option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="container-button-register border-topbottom">
                <button class="btn button-create" type="submit">Gravar</button>
                <a href="index.php" class="btn button-clear">Voltar</a>
            </div>

        </form>
    </div>


    <!-- script -->
    <script src="../javascript/jquery-3.7.1.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>