<?php include "./header.php";?>

<form action="./formulario.php" method="post" c>

    <div class="form group row container-fluid">
    <h1 class="h3">Preencha as Informações a seguir:</h1><br>
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">Nome Completo</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">RA</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        
    </div>

    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">Curso Matriculado</span>
                <select name="curso" class="form-control">
                    <option value="0" selected ></option>
                    <option value="pi">Produção Industrial</option>
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="si">Sistemas para Internet</option>
                    <option value="agro">Agronegócio</option>
                    <option value="ge">Gestão Empresarial</option>
                </select>
        </div>
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">Turno</span>
                <select name="turno" class="form-control">
                    <option value="0" seleted></option>
                    <option value="m">Matutino</option>
                    <option value="t">Vespertino</option>
                    <option value="n">Noturno</option>
                    <option value="ead">EAD</option>
                </select>
        </div>
        
    </div>

    <div class="form group row container-fluid">
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
            <input type="email" required name="email "class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 col">
            <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <br>
    <div class="form group col-4 offset-4">
        <a href="./formulario2.php">
            <input type="button" value="Próximo" class="form-control btn btn-success">
        </a>
    </div>
</form>


<?php include "./footer.php";?>
