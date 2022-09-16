<?php include "./header.php";?>

<div class="container text-center">
  <div class="row">
    <div class="col">
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Consultar Requerimento
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title h5" id="staticBackdropLabel">CONSULTA DE REQUERIMENTO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                
            <div class="modal-body">
            <?php
                    if (!empty($_POST) && isset($_POST)) {
                    if( empty($_POST["protocolo"]) ){
                ?>
                    <div class="alert alert-danger">
                        O número de Protocolo deve ser Informado!
                    </div>
                <?php
                }}else{
                ?>
                    <div class="alert alert-danger">
                    O número de Protocolo deve ser Informado!
                    </div>
                <?php
                }
                ?>
                <form action="./consultaReq.php" method="post">
                    <div class="form-control">
                        <label>Digite o número do Protocolo do Requerimento</label>
                        <input type="number" require name="protocolo" class="form-control" />

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Buscar</button>
            </div>
            </div>
        </div>
        </div>

    </div>
    <div class="col">
        <a href="./formulario.php">
            <button class="btn btn-danger">Solicitar Novo Requerimento</button>
        </a>
    </div>
    <div class="col">
        <a href="./login.php">
            <button class="btn btn-danger">Secretaria</button>
        </a>
    </div>
  </div>
</div>


<?php include "./footer.php";?>
