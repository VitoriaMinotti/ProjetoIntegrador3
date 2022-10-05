<?php include "./header.php";?>

<form action="./formulario.php" method="post" >

<div class="col-5 container-fluid">
    <br><h1 class="h3">Preencha as Informações a seguir:</h1><br>
</div>
<div class="col-5 container-fluid bg-light border rounded">
    <div class="form group row container-fluid">
        <div class="input-group mb-3 col mt-3">
            <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Nome Completo" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <input type="text" class="form-control" aria-label="Sizing example input" placeholder="RA" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>

    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <!-- <span class="input-group-text" id="inputGroup-sizing-default">Curso Matriculado</span> -->
                <select name="curso" class="form-control form-select">
                    <option value="0" selected> Selecione o Curso</option>
                    <option value="pi">Produção Industrial</option>
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="si">Sistemas para Internet</option>
                    <option value="agro">Agronegócio</option>
                    <option value="ge">Gestão Empresarial</option>
                </select>
        </div>
    </div>
    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <!-- <span class="input-group-text" id="inputGroup-sizing-default">Turno</span> -->
                <select name="turno" class="form-control form-select" >
                    <option value="0" seleted> Selecione o Turno</option>
                    <option value="m">Matutino</option>
                    <option value="t">Vespertino</option>
                    <option value="n">Noturno</option>
                    <option value="ead">EAD</option>
                </select>
        </div>
    </div>
 
    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <input type="email" required name="email "class="form-control" aria-label="Sizing example input" placeholder="E-mail" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Telefone" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    </div>
    <br>
    <div class="container container-fluid">
        <div class="row offset-4 col-5">
            <div class="col-3 offset-1">
                <a href="./formulario2.php">
                    <input type="button" value="Voltar" class="form-control btn btn-secondary">
                </a>
            </div>
            <div class="col-3 offset-1">
                <a href="./formulario2.php">
                    <input type="button" value="Próximo" class="form-control btn btn-success">
                </a>
            </div>
        </div>
  </div>
    
</div>
</form>


<?php include "./footer.php";?>
