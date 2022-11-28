<?php 
    $titulo = "login";
    include "protect.php";
    include "./db/conexao.php";
    include "./header.php";
    // if (isset($_GET["busca"])&& !empty($_GET["busca"])) {
    //     $protocolo = $_GET["busca"];
    //     $query = file_get_contents("select * from solicitacao where protocolo = $protocolo");
    //     $conexao = json_decode($query,true);
    
    // }else{
    //     $conexao = file_get_contents("select * from solicitacao");
    //     $conexao = json_decode($conexao,true);
    // }

?>

<div class="col-md-10 my-4 container border rounded">
    <div class="card mt-4 mb-4">
        <div class="d-flex card-header bg-success text-white align-items-center justify-content-between">
            REQUERIMENTOS
            <div class="bg-success text-white text-end">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    BEM VINDO, <?php echo $_SESSION['setor'];?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./logout.php">SAIR</a></li>
                    </ul>
                </div>
                    
            </div>
        </div>
        <form action="./adm.php" method="get">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <!-- <div class="col-2">
                        <select name="opcao" class="form-control">
                            <option selected="selected" value="0">TODOS</option>
                            <option value="1">POR NOME</option>
                            <option value="2">POR PROTOCOLO</option>
                        </select>
                    </div> -->
                    <div class="col-5">
                        <input type="text" class="form-control" name="busca" />
                    </div>
                    <div class="col-1">
                        <button class="btn btn-success" type="submit">PESQUISAR</button>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </form>
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                    <th>PROTOCOLO</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE</th>
                    <th>STATUS</th>
                    <th>TIPO REQUERIMENTO</th>
                    <th>SOLICITADO</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query = "select p.protocolo protocolo, p.id_solicitacao id_solicitacao, p.situacao situacao, p.requerimento requerimento, p.data_entrada data_entrada, a.nome nome, a.email email, a.telefone telefone from solicitacao p inner join aluno a on (p.id_solicitacao = a.id_aluno)";
                    $dados = mysqli_query($conexao,$query);

                    if($dados)
                    {
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            ?>
                                <tr>
                                    <td><?php echo $linha["protocolo"];?> </td>
                                    <td><?php echo $linha["nome"];?></td>
                                    <td><?php echo $linha["email"];?></td>
                                    <td><?php echo $linha["telefone"];?></td>
                                    <td><?php echo $linha["situacao"];?></td>
                                    <td><?php echo $linha["requerimento"];?></td>
                                    <td><?php echo $linha["data_entrada"];?></td>
                                    <td><a class="btn btn-warning" href="./completo.php">VISUALIZAR</a></td>
                                </tr>

                        <?php
                        }
                    }

                        
                ?>
                </tbody>
            </table>
        </div>  
    </div>
</div>

<?php include "./footer.php";?>
