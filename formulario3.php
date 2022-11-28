<?php 
    $titulo = "Descrição e Anexo";
    include "./header.php";
    include "./db/conexao.php";

    
?>

<form action="./formulario4.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="nome" value="<?php echo $_POST["nome"];?>">
<input type="hidden" name="ra" value="<?php echo $_POST["ra"];?>">
<input type="hidden" name="curso" value="<?php echo $_POST["curso"];?>">
<input type="hidden" name="turno" value="<?php echo $_POST["turno"];?>">
<input type="hidden" name="email" value="<?php echo $_POST["email"];?>">
<input type="hidden" name="telefone" value="<?php echo $_POST["telefone"];?>">
<input type="hidden" name="req" value="<?php echo $_POST["req"];?>">


<div class="col-6 container-fluid">
    <br><h1 class="h3 text-center">DESCREVA O MOTIVO DA SUA SOLICITAÇÃO</h1><br>
</div>
    <div class="col-md-4 px-4 py-2 container border rounded">
        <div class="row">
            <div class="col-md-12  bg-light border rounded">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-3">
                        <div class="input-group mt-3 h5">
                            <label>SOLICITAÇÃO: <?php echo $_POST["req"];?></label>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="m-2 h4">Descrição:</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="descricao" required placeholder="Descreva o motivo da sua solicitação." id="floatingTextarea2" style="height: 200px"></textarea>
                            <label class="m-1" for="floatingTextarea2">Descreva o motivo da sua solicitação</label>
                        </div>
                    </div>
                    <div class="row m-2">   
                        <div class="col-6 offset-7">
                            <button type="submit" class="btn btn-primary rounded m-2">PRÓXIMO</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>





<?php include "./footer.php";?>
