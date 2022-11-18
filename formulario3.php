<?php 
    $titulo = "Descrição e Anexo";
    include "./header.php";
    if (isset($_FILES["anexo"]) && !empty($_FILES["anexo"]))
    {
        for($i = 0; $i < count($_FILES["anexo"]["name"]); $i++)
        {
            move_uploaded_file($_FILES["anexo"]["tmp_name"][$i], "./anexo/".$_FILES["anexo"]["name"][$i]);
            //Salvar o file[$i] no banco com o Id da requisição
        }
        ?>
        <div class="alert alert-success">
            Anexo enviado com sucesso
        </div>
        <?php
    } 

    ?>

<form action="./formulario3.php" method="post" enctype="multipart/form-data">

<div class="col-6 container-fluid">
    <br><h1 class="h3 text-center">DESCREVA O MOTIVO DA SUA SOLICITAÇÃO</h1><br>
</div>
    <div class="col-md-4 px-4 py-2 container border rounded">
        <div class="row">
            <div class="col-md-12  bg-light border rounded">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-3">
                        <label class="m-2 h4">Descrição:</label>
                        <div class="form-floating">
                            <textarea class="form-control" required placeholder="Descreva o motivo da sua solicitação." id="floatingTextarea2" style="height: 200px"></textarea>
                            <label class="m-1" for="floatingTextarea2">Descreva o motivo da sua solicitação.</label>
                        </div>
                        <label class="h5 mt-3">ANEXO OBRIGATÓRIO</label>
                        <input type="file" name="anexo[]" required multiple class="form-control">
                    </div>
                    <div class="row m-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">NECESSITA DE VIA IMPRESSA</label>
                    </div>
                    <div class="row m-2">   
                        <div class="col-6 offset-7">
                            <button type="submit" name="descricao" class="btn btn-primary rounded m-2">ENVIAR ANEXO</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>





<?php include "./footer.php";?>
