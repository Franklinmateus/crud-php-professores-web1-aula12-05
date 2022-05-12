<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>CRUD - Professores</title>

</head>

<body>
   <?php    
      $professor = new Professor;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $idade = $_POST['idade'];


            $professor->setNome($nome);
            $professor->setEndereco($endereco);
            $professor->setIdade($idade);

            if($professor->insert()){
                echo "Professor ". $nome. " inserido com sucesso!";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='endereço'> Endereço: </label>    
            <input type="text" name="endereco"/>
        <label for="idade">Idade:</label>
            <input type="int" name="idade" required name=idade>
            <input type="submit" name="cadastrar"/>
            
    </form>

</body>
</html>
