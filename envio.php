<?php 

    $titulo = "Envio";
    include "./db/conexao.php";

    if (isset($_POST["nome"]) && !empty($_POST["nome"]) ) {
    
    }else{
        header("location:index.php");
    }
    
    include "./header.php";
    

    if (isset($_FILES["anexo"]) && !empty($_FILES["anexo"]))
    {
        for($i = 0; $i < count($_FILES["anexo"]["name"]); $i++)
        {
            move_uploaded_file($_FILES["anexo"]["tmp_name"][$i], "./anexo/".$_FILES["anexo"]["name"][$i]);
            //Salvar o file[$i] no banco com o Id da requisição
        }
        ?>
        <script>
            alert("Anexo enviado com sucesso!");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Ocorreu um erro ao enviar o anexo!");
        </script>
        <?php
    }

    if(isset($_POST) && !empty($_POST)){
        $nome = $_POST["nome"];
        $ra = $_POST["ra"];
        $curso = $_POST["curso"];
        $turno = $_POST["turno"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $req = $_POST["req"];
        $descricao = $_POST["descricao"];
        $data = date("Y-m-d");  
        $adm = 1;
        $protocolo = $ra . date("d") . date("m");
        echo $protocolo;    
        $anexo = $_FILES[$i];
        $situacao = "ANDAMENTO";
        $query = "insert into aluno (nome, ra, curso, turno, email, telefone) values('$nome','$ra','$curso','$turno','$email','$telefone')";
        $resultado = mysqli_query($conexao,$query);
        $ultimoId = mysqli_insert_id($conexao);
        $query2 = "insert into solicitacao (id_aluno, id_administrativo, id_anexo, protocolo, situacao, requerimento, descricao, data_entrada) values ($ultimoId, '$adm', '$anexo', '$protocolo', '$situacao', '$req','$descricao','$data')";
        $resultado2 = mysqli_query($conexao,$query2);
    
    }else{
        echo "Ocorreu um erro ao enviar sua solicitação!";
    }

    ?>
    
<?php include "./footer.php";?>
