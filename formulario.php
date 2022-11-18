<?php 

$titulo = "Informações do Aluno";
include "./header.php";?>

<form action="./formulario2.php" method="post" >

    <div class="col-5 container-fluid">
        <br><h1 class="h3 text-center">Preencha as Informações a seguir:</h1><br>
    </div>
    <div class="col-5 container-fluid bg-light border rounded">
        <div class="form group row container-fluid">
            <div class="input-group mb-3 col mt-3">
                <input type="text" class="form-control" required aria-label="Sizing example input" placeholder="Nome Completo" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="form group row container-fluid">
            <div class="input-group mb-3 col">
                <input type="text" class="form-control" required aria-label="Sizing example input" placeholder="RA" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>

        <div class="form group row container-fluid">
            <div class="input-group mb-3 col">
                    <select id="curso" name="curso" required onchange="onSelectCurso()" class="form-control form-select">
                        <option value="0">Selecione o seu Curso</option>
                        <option value="pi">Produção Industrial</option>
                        <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                        <option value="si">Sistemas para Internet</option>
                        <option value="agro">Agronegócio</option>
                        <option value="ge">Gestão Empresarial</option>
                    </select>
                    <select id="turno" name="turno" required class="form-control form-select">
                        <option value = "0">Selecione o seu Turno</option>
                        <option value = "M">Manhã</option>
                        <option value = "T">Tarde</option>
                        <option value = "N">Noite</option>
                    </select>
                    <script>
                        function onSelectCurso(props){
                            
                            const cursoElement = document.getElementById('curso');
                            const turnoElement = document.getElementById('turno');
                            //console.log(cursoElement);

                            let x = cursoElement.value;
                            console.log(x) ;
                            if ( x==="0" ) {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'M'>Manhâ</option> <option value = 'T'>Tarde</option> <option value = 'N'>Noite</option>" ;
                            }
                            if ( x==="pi" ) {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'M'>Manhâ</option> <option value = 'N'>Noite</option>" ;
                            }
                            if ( x==="ads") {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'T'>Tarde</option> <option value = 'N'>Noite</option>" ;
                            }   
                            if ( x==="agro" ) {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'T'>Tarde</option> <option value = 'N'>Noite</option>" ;
                            }   
                            if ( x==="si" ) {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'M'>Manhã</option>" ;
                            }  
                            if ( x==="ge" ) {
                                turnoElement.innerHTML = "<option value = '0'>Selecione o seu Turno</option> <option value = 'E'>EAD</option>" ;
                            }   

                        }
                    </script>    
            </div>
        </div>
    
    
        <div class="form group row container-fluid">
            <div class="input-group mb-3 col">
                <input type="email" required name="email "class="form-control" aria-label="Sizing example input" placeholder="E-mail" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="form group row container-fluid">
            <div class="input-group mb-3 col">
                <input type="text" required class="form-control" aria-label="Sizing example input" placeholder="Telefone" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        </div>
        <br>
        <div class="container container-fluid">
            <div class="row offset-4 col-5">
                <div class="col-3 offset-1">
                    <a href="./index.php">
                        <input type="button" value="Voltar" class="form-control btn btn-secondary">
                    </a>
                </div>
                <div class="col-3 offset-1">
                    <a href="./formulario2.php">
                        <button type="submit"class="form-control btn btn-primary">Próximo</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>


<?php include "./footer.php";?>
