<?php 
    $titulo = "login";
    include "./header.php";
?>

<div class="col-md-10 my-4 container border rounded">
    <div class="card mt-4 mb-4">
        <div class="card-header bg-success text-white">REQUERIMENTOS</div>
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-2">
                        <select name="opcao" class="form-control">
                            <option selected="selected" value="0">TODOS</option>
                            <option value="1">POR NOME</option>
                            <option value="2">POR PROTOCOLO</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="textoPesquisado" />
                    </div>
                    <div class="col-2">
                        <button class="btn btn-success">PESQUISAR</button>
                    </div>
                    <br><br><br>
                </div>
            </div>
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                    <th>PROTOCOLO</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>STATUS</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    for($i = 0; $i< 10; $i++)
                    {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>Nome <?php echo $i; ?></td>
                                <td>email.<?php echo $i; ?>@fatec.sp.gov.br</td>
                                <td>ANDAMENTO | ANÁLISE | FINALIZADO</td>
                                <td><a class="btn btn-warning" >VISUALIZAR</a> </td>
                            </tr>

                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>  
    </div>
</div>

<?php include "./footer.php";?>
