<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/general.css" rel="stylesheet">
    <title>Sistema Acadêmico</title>
</head> 

<body>
    <header class="d-block p-5 text-white">
        <div class="container">
            <div class="d-flex justify-content-between">
                <!-- Titulo página -->
                <div class="">
                    <h3>Sistema de gerenciamento de saúde</h3>
                </div>

                <!-- Navbar -->
                <div class="">
                    <ul class="nav me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="me-4"><a href="./list-medicines.php" class="btn btn-primary  px-3 text-white">Medicamentos</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                        <li><a href="./health-monitoring.php" class="btn btn-primary px-3 text-white">Histórico</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                    </ul>
                </div>

                <!-- Botao logout -->
                <div class="d-flex">
                    <div class="me-3 d-flex align-items-center">
                        <span><?=$_SESSION['user_first_name']?> <?=$_SESSION['user_last_name']?></span>
                    </div>
                    <form method="POST" action="../../controllers/users.php">
                        <input type="hidden" name="action" value="logout">
                        <input type="submit" value="Sair" class="btn btn-light">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main class="min-vh-100">