<?php 

$titulo = "Formulario Final";
//include "protect.php";
include "./header.php";
include "./db/conexao.php";



?>

<form action="" method="post" enctype="multipart/form-data">
    <?php
        $query = "select p.protocolo protocolo, p.situacao situacao, p.requerimento requerimento, p.descricao descricao, d.anexo anexo, p.data_entrada data_entrada, a.nome nome, a.ra ra, a.email email, a.telefone telefone, a.curso curso, a.turno turno from solicitacao p inner join aluno a inner join anexo d on (p.id_aluno = a.id_aluno = d.id_anexo)";
        $dados = mysqli_query($conexao,$query);

        $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="col-6 container-fluid">
        <br><h1 class="h3 text-center">REQUERIMENTO</h1><br>
    </div>
    <div class="col-md-5 container-fluid bg-light border rounded">
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>PROTOCOLO: <?php echo $linha["protocolo"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>SITUAÇÃO: <?php echo $linha["situacao"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TIPO REQUERIMENTO: <?php echo $linha["requerimento"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>DESCRIÇÃO: <?php echo $linha["descricao"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>ANEXO: <?php echo $linha["anexo"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>DATA ENTRADA: <?php echo $linha["data_entrada"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>NOME: <?php echo $linha["nome"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>RA: <?php echo $linha["ra"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>E-MAIL: <?php echo $linha["email"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TELEFONE: <?php echo $linha["telefone"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>CURSO: <?php echo $linha["curso"];?></label>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="input-group mt-3">
                <label>TURNO: <?php echo $linha["turno"];?></label>
            </div>
        </div>  

        
    </div>
    

</form>





<?php include "./footer.php";?>
