<?php 

    $titulo = "Formulario Final";
    include "./db/conexao.php";

    if (isset($_POST["descricao"]) && !empty($_POST["descricao"]) ) {
    
    }else{
        header("location:index.php");
    }
    
    include "./header.php";
    


    ?>



<form action="./envio.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="nome" value="<?php echo $_POST["nome"];?>">
    <input type="hidden" name="ra" value="<?php echo $_POST["ra"];?>">
    <input type="hidden" name="curso" value="<?php echo $_POST["curso"];?>">
    <input type="hidden" name="turno" value="<?php echo $_POST["turno"];?>">
    <input type="hidden" name="email" value="<?php echo $_POST["email"];?>">
    <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"];?>">
    <input type="hidden" name="req" value="<?php echo $_POST["req"];?>">
    <input type="hidden" name="descricao" value="<?php echo $_POST["descricao"];?>">

    <div class="col-6 container-fluid">
        <br><h1 class="h3 text-center">REVISE A SUA SOLICITAÇÃO</h1><br>
    </div>
    <div class="col-md-5 container-fluid bg-light border rounded">
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>NOME: <?php echo $_POST["nome"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>RA: <?php echo $_POST["ra"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>CURSO: <?php echo $_POST["curso"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TURNO: <?php echo $_POST["turno"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>E-MAIL: <?php echo $_POST["email"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TELEFONE: <?php echo $_POST["telefone"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TIPO SOLICITAÇÃO: <?php echo $_POST["req"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>DESCRIÇÃO: <?php echo $_POST["descricao"];?></label>
            </div>
        </div>

        <div class="row m-3">
                        <label class="h5 mt-3">ANEXO OBRIGATÓRIO</label>
                        <input type="file" name="anexo[]" required multiple class="form-control">
                    </div>
        <button type="submit" class="form-control btn btn-success my-3">CONFIRMAR</button>

    </div>
    

</form>


<?php include "./footer.php";?>
