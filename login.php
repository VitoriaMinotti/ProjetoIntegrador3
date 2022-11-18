<?php 
    $titulo = "login";
    include "./header.php";
?>

<form action="adm.php" method="post">
<div class="col-md-4 px-4 py-2 container border rounded">
        <div class="row">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-MAIL DE ACESSO</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Informe o e-mail do acesso administrativo</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">SENHA </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">ACESSAR</button>
        </div>
</div>
</form>


<?php include "./footer.php";?>
