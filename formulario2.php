<?php 
$titulo = "Escolha o Tipo de Requerimento";
include "./header.php";?>

<form action="./formulario3.php" method="post" >

<div class="col-6 container-fluid">
    <br><h1 class="h3 text-center">SELECIONE O REQUERIMENTO QUE DESEJA SOLICITAR</h1><br>
</div>
    <div class="col-md-10 container border rounded">
        <div class="row m-1">
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">ATESTADOS</p>
                        <br>
                        <ul>
                            <li>de Matrícula Ingressante com Portaria</li>
                            <li>de Matrícula Simples</li>
                            <li>de Matrícula Simples com Portaria de Autorização</li>
                            <li>de Matrícula com Disiciplinas</li>
                            <li>de Período</li>
                            <li>de Frequência</li>
                            <li>de Período de Estágio</li>
                            <li>de Previsão de Conclusão</li>
                            <li>de Fim de Atividades</li>
                            <li>Declaração de FIm de Atividades</li>
                        </ul>
                        <p class="h5">Apenas pelo SIGA</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="atestados" disabled class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">01 - ABONO DE FALTAS</p>
                        <p>O aluno poderá solicitar em caso de Serviço Militar ou por óbito de parente de 1º Grau</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Em caso de Serviço Militar, apresentar documento da Junta Militar.
                        Em caso de Óbito de parente de 1º Grau, apresentar certidão de Óbito.</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="01 - ABONO DE FALTAS" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">02 - ALTERAÇÃO NA GRADE HORÁRIA</p>
                        <p>O aluno poderá solicitar troca de disciplina após confirmação da rematrícula on-line</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atenção ao prazo no Calendário Acadêmico.</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="02 - ALTERAÇÃO NA GRADE HORÁRIA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">03 - MATRICULA DE ALUNO ESPECIAL</p>
                        <p>Para quem deseja frequentar aula equivalente de sua faculdade de origem na FATEC</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atestado de matrícula e conteúdo programático da disciplina.</p>
                        <p class="m-0">Atenção ao prazo no Calendário Acadêmico.</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="03 - MATRICULA DE ALUNO ESPECIAL" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">04 - APROVEITAMENTO DE ESTUDOS</p>
                        <p>O aluno poderá solicitar dispensa em disciplina que já foi aprovado em outra graduação</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Histórico Escolar e conteúdo programático da disciplina.</p>
                        <p class="m-0">Atenção ao prazo no Calendário Acadêmico.</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="04 - APROVEITAMENTO DE ESTUDOS" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">05 - BENEFÍCIOS DECRETO-LEI 1.044/69</p>
                        <p>O aluno poderá solicitar Regime de Exercícios Domiciliares, realizar trabalhos para abono de faltas. Apenas atestado acima de 15 dias</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atestado com CID</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="05 - BENEFÍCIOS DECRETO-LEI 1.044/69" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">06 - BENEFÍCIOS DECRETO-LEI 6.202/759</p>
                        <p>A aluna, enquanto gestante, poderá solicitar Regime de Exercícios Domiciliares, realizar trabalhos para abono de faltas. Apenas atestado acima de 15 dias</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atestado com CID</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="06 - BENEFÍCIOS DECRETO-LEI 6.202/759" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">07 - CANCELAMENTO DE MATRICULA</p>
                        <p>O aluno poderá solicitar o cancelamento da matricula, implicando na desistência da vaga.</p>
                        <br>
                        <p class="h5">Sem Anexo Obrigatório</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="07 - CANCELAMENTO DE MATRICULA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">08 - DESISTÊNCIA DE DISCIPLINA</p>
                        <p>O aluno poderá solicitar a desistência de determinada disciplina no semestre vigente. Não dará o direito a se matricular em outra disiciplina.</p>
                        <br>
                        <p class="h5">Sem Anexo Obrigatório</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="08 - DESISTÊNCIA DE DISCIPLINA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">09 - APRESSAMENTO DE DIPLOMA</p>
                        <p>O aluno poderá solicitar o apressamento na expedição do Diploma mediante comprovante da necessidade.</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Comprovante da Necessidade</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="09 - APRESSAMENTO DE DIPLOMA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">10 - EXAME DE PROFICIÊNCIA</p>
                        <p>O aluno poderá solicitar a dispensa das disiciplinas de língua estrangeira perante exame aplicado.</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Certificado de Curso de Línguas Estrangeiras</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="10 - EXAME DE PROFICIÊNCIA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">11 - INSCRIÇÃO PARA VAGAS REMANESCENTES</p>
                        <p>O aluno poderá solicitar a matrícula em outro curso na mesma FATEC ou outro curso de outra FATEC ou de outras Instituições. (Não é necessário realizar Vestibular)</p>
                        <p>Portador de Diploma de Nível Superior</p>
                        <br>
                        <p class="h5">Verificar Edital e Prazo em Calendário Acadêmico</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="11 - INSCRIÇÃO PARA VAGAS REMANESCENTES" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">12 - MATRÍCULA EM DISCIPLINA DE OUTRO TURNO OU CURSO</p>
                        <p>O aluno poderá solicitar cursar disciplina equivalente em outro turno ou curso.</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atestado de Trabalho</p>
                        <p class="m-0">Vide o prazo no calendário acadêmico</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="12 - MATRÍCULA EM DISCIPLINA DE OUTRO TURNO OU CURSO" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">13 - SEGUNDA CHAMADA DE PROVA</p>
                        <p>O aluno poderá solicitar realizar prova ou trabalho em sala de aula mediante apresentação de atestado médico inferior a 15 dias.</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Atestado com CID</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="13 - SEGUNDA CHAMADA DE PROVA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">14 - TRANCAMENTO TOTAL DE MATRICULA</p>
                        <p>O aluno poderá solicitar o trancamento da matrícula para o semestre vigente.</p>
                        <br>
                        <p class="h5">Sem Anexo Obrigatório</p>
                        <p class="m-0">Vide o prazo no Calendário Acadêmico</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="14 - TRANCAMENTO TOTAL DE MATRICULA" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">15 - EQUIVALÊNCIA PARA O TRABALHO DE GRADUAÇÃO- TG</p>
                        <p>O aluno poderá solicitar aprovação na disciplina TG1 e TG2 mediante aprovação por apresentação a banca examinadora ou publica de artigo científico.</p>
                        <br>
                        <p class="h5">Anexo Obrigatório</p>
                        <p class="m-0">Apenas em caso de artigo científico: necessário submissão antecipada da carta de aceite no site FATEC TQ, área do curso matriculado, TRABALHO DE CONCLUSÃO, PROTOCOLAR ENTREGA DE TRABALHO DE CONCLUSÃO.</p>
                        <p class="m-0">Vide o prazo no Calendário Acadêmico</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="15 - EQUIVALÊNCIA PARA O TRABALHO DE GRADUAÇÃO- TG" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">16 - REVISÃO DE NOTAS E FALTAS</p>
                        <p>O aluno poderá solicitar revisão de notas e faltas.</p>
                        <br>
                        <p class="h5">APENAS POR SIGA</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="16 - REVISÃO DE NOTAS E FALTAS" disabled class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 bg-light border rounded d-flex">
                <div class="d-flex flex-column justify-content-between">
                    <div class="row m-2">
                        <p class="p-2 h4">17 - OUTROS TIPOS DE SOLICITAÇÃO</p>
                        <p>Caso a sua solicitação não se encaixe nos itens anteriores.</p>
                        <br>
                        <p class="h5">DESCREVER SOLICITAÇÃO</p>
                    </div>
                    <div class="row">   
                        <div class="col-4 offset-4">
                            <button type="submit" name="17 - OUTROS TIPOS DE SOLICITAÇÃO" class="btn btn-primary rounded m-2">SOLICITAR</button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="container container-fluid">
        <div class="row offset-4 col-5">
            <div class="col-3 offset-1">
                <a href="./index.php">
                    <input type="button" value="Voltar" class=" m-3 btn btn-secondary">
                </a>
            </div>
        </div>
    </div>
</form>


<?php include "./footer.php";?>
