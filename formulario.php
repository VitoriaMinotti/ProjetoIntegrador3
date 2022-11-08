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
                
                <select id="location" class="form-control form-select" name="location" onclick='test()'>
                    <option value="0">Selecione o Curso</option>
                    <option value="pi">Produção Industrial</option>
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="si">Sistemas para Internet</option>
                    <option value="agro">Agronegócio</option>
                    <option value="ge">Gestão Empresarial</option>
                </select>
                <select name="turno" class="form-control form-select" onclick='test()' >
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
                <a href="./index.php">
                    <input type="button" value="Voltar" class="form-control btn btn-secondary">
                </a>
            </div>
            <div class="col-3 offset-1">
                <a href="./formulario2.php">
                    <input type="button" value="Próximo" class="form-control btn btn-primary">
                </a>
            </div>
        </div>
  </div>
    
</div>
</form>

<select id="location" name="location" onclick='test()'>
    <option value="0">Selecione o seu Curso</option>
<!-- <option value="home">Personal</option>
    <option value="gfe">Government</option> -->
    <option value="pi">Produção Industrial</option>
    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
    <option value="si">Sistemas para Internet</option>
    <option value="agro">Agronegócio</option>
    <option value="ge">Gestão Empresarial</option>
</select>

<select id="pi" name="pi" style="display: none" onclick='test()'>
  <option value="0">Selecione o seu Turno</option>
  <option value="1">Manhã</option>
  <option value="2">Noite</option>
</select>

<select id="ads" name="ads" style="display: none" onclick='test()'>
  <option value="0">Selecione o seu Turno</option>
  <option value="1">Tarde</option>
  <option value="2">Noite</option>
</select>

<select id="si" name="si" style="display: none" onclick='test()'>
<option value="0">Selecione o seu Turno</option>
  <option value="1">Manhã</option>
</select>

<select id="agro" name="agro" style="display: none" onclick='test()'>
  <option value="0">Selecione o seu Turno</option>
  <option value="1">Tarde</option>
  <option value="2">Noite</option>
</select>

<select id="ge" name="ge" style="display: none" onclick='test()'>
  <option value="0">Selecione o seu Turno</option>
  <option value="1">EAD</option>
</select>

<div id="overseas-answer" style="display: none" onclick='test()'>
  Please visit <a href="https://www.dmdc.osd.mil/milconnect">Milconnect</a> and update your profile. Please wait 24 hours and try accessing your email again. If this does not work, please contact the help desk  
</div>    
<script>
function test() {
  if (document.getElementById('location').value == 'pi') {
    document.getElementById('pi').style.display = 'none';
  } else {
    document.getElementById('pi').style.display = 'none';
  }

  if (document.getElementById('location').value == 'ads') {
    document.getElementById('ads').style.display = 'none';
  } else {
    document.getElementById('ads').style.display = 'none';
  }

  if (document.getElementById('location').value == 'si') {
    document.getElementById('si').style.display = 'none';
  }  else {
    document.getElementById('si').style.display = 'none';
  }

  if (document.getElementById('location').value == 'agro') {
    document.getElementById('agro').style.display = 'none';
  } else {
    document.getElementById('agro').style.display = 'none';
  }

  if (document.getElementById('location').value == 'ge') {
    document.getElementById('ge').style.display = 'none';
  } else {
    document.getElementById('ge').style.display = 'none';
  }
}
</script>

<?php include "./footer.php";?>
