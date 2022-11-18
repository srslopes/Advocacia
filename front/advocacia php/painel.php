<?php
    include('protect.php');
    include_once("conexao.php");

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $result_usuarios = "SELECT  * FROM usuarios";
    $resultad_usuarios = mysqli_query($conn, $result_usuarios);

    /*$result_processos = "SELECT * FROM processos";
    $result_processos = mysqli_query($conn, $result_processos);

    /*while($row_processos = mysqli_fetch_assoc($result_processos)){
        echo "<tr>";
        echo "<td>" . $row_processos['cliente'] . "<td>";
        echo "</tr>";
    }

    $result_arquivos = "SELECT * FROM arquivos";
    $result_arquivos = mysqli_query($conn, $result_arquivos);

    while($row_arquivos = mysqli_fetch_assoc($result_arquivos)){
        
        echo $row_arquivos['nome'] . "<br>";

    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGEA</title>
</head>
<body>

    <div class="container">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <span class="navbar-text">Bem-vindo ao painel, <b><?php echo $_SESSION['nome_usuario']; ?></b>.</span>
            </div>
        </nav>
        <div class="header">
            <span>SIGEA - Sistema Gerencial de Advocacia</span>
        </div>
        <div class="divTable">
            <table>
                <thead>
                    <tr>
                        <th scope ="col">Advogado</th>
                        <th scope ="col">E-mail</th>
                        <th scope ="col">Cargo</th>
                        <th scope ="col">Processos</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row_usuario = mysqli_fetch_assoc($resultad_usuarios)){
                            echo "<tr>";
                            echo "<td>" . $row_usuario['nome_usuario'] . "</td>";
                            echo "<td>" . $row_usuario['email_usuario'] . "</td>";
                            echo "<td>" . $row_usuario['cargo_usuario'] . "</td>";
                            echo "<td>" . $row_usuario['id_processo_associado'] . "</td>";
                            echo "<td>
                                    <a href='editar.php'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-info-circle-fill' viewBox='0 0 16 16'>
                                            <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                                        </svg>
                                    </a>
                                </td>";
                            echo "<td>
                                    <a href='#'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                        </svg>
                                    </a>
                                </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>