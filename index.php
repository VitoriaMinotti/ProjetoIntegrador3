<?php 
$titulo = "Requerimento Online";
include "./header.php";
include "./db/conexao.php";

// if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']))
// {
//     $email = $conexao->real_escape_string($_POST['email']);
//     $senha = $conexao->real_escape_string($_POST['senha']);

//     $query = "select * from administrativo where email = '$email' and senha = '$senha'";
//     $resultado = mysqli_query($conexao,$query);
    
//     $qtd = $resultado->num_rows;

//     if ($qtd == 1) {

//         $usuario = $resultado->fetch_assoc();

//         if (!isset($_SESSION)) {
//             session_start();
//         }

//         $_SESSION['id_administrativo'] = $usuario['id_administrativo'];
//         $_SESSION['setor'] = $usuario['setor'];

//         header("location:adm.php");

//     }else{
//         echo "Falha ao logal !";
//     }
    
// }

?>


<div class="d-flex justify-content-center text-center flex-wrap m-5">
    <div class="cartao cartao-ads d-flex align-items-center m-4 rounded-3">
        <div class="mx-auto opacity-100">
            <div class="icone-curso">
                <img src="./imagens/add.png" alt="newReq">
            </div>
            <a href="./formulario.php">
                <button class="btn btn-primary">Novo Requerimento</button>
            </a>
        </div> 
    </div>
    <div class="cartao cartao-ads d-flex align-items-center m-4 rounded-3">
        <div class="mx-auto opacity-100">
            <div class="icone-curso">
                <img src="./imagens/search.png" alt="search">
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Consultar Requerimento</button>
        </div>
    </div>
    <div class="cartao cartao-ads d-flex align-items-center m-4 rounded-3">
        <div class="mx-auto opacity-100">
            <div class="icone-curso">
                <img src="./imagens/adm.png" alt="adm">
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Acesso Administrativo</button>
        </div>
    </div>
</div>

<!-- Modal-Consulta -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h1 class="modal-title h5" id="staticBackdropLabel">CONSULTA DE REQUERIMENTO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./consultaReq.php" method="post">
                            <div class="form-control">
                                <label>Digite o número do Protocolo do Requerimento</label>
                                <textarea name="protocolo" required class="form-control"  id="protocolo" cols="10" rows="1"></textarea>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="alert alert-danger">
                            O número de Protocolo deve ser Informado!
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal-Login -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h1 class="modal-title h5" id="staticBackdropLabel">ACESSO ADMINISTRATIVO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="col-md-12 px-4 py-2 container border rounded">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">E-MAIL DE ACESSO</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">Informe o e-mail do acesso administrativo</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">SENHA </label>
                                        <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">ACESSAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>


<?php include "./footer.php";?>
