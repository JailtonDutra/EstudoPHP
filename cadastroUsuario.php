<?php
    include_once 'dao/conexao.php';
?>
<html lang="pt-BR">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="css/cadastroUsuario.css"/>
        <link rel="stylesheet" href="css/bootstrap-datepicker.css"/>
        <title>Cadastro de usuários</title>        
    </head>

    <body>
        <div class="container-fluid">
            <form method="POST" action="#">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div id="titulo" class="col-xl-10 offset-xl-1">
                            <label>CADASTRO DE USUÁRIOS</label>
                        </div>
                    </div>
                </div>
                <div class="container_dados_pessoais col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-10">
                            <label for="nome_usuario" class="titulo_label">DADOS PESSOAIS:</label>
                        </div>
                    </div>		
                    <div class="row form-group">			
                        <div class="col-xl-8">
                            <label for="nome_usuario">Nome</label>
                            <input id="nome_usuario" name="nome_usuario" type="text" class="text_placeholder form-control" placeholder="Nome completo" />
                        </div>
                        <div class="col-xl-2 offset-xl-2">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" class="text_placeholder form-control">
                                <option>Selecione uma opção</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>								
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="estado_civil">Estado civil</label>
                            <select id="estado_civil" name="estado_civil" class="text_placeholder form-control">
                                <option value="0">Selecione uma opção</option>
                                <option value="1">Solteiro(a)</option>
                                <option value="2">Casado(a)</option>
                                <option value="3">Divorciado(a)</option>
                                <option value="4">Viuvo(a)</option>
                            </select>
                        </div>
                        <div class="col-xl-8 offset-xl-2">
                            <label id="lbl_conjuge" for="input_conjuge">Nome do cônjuge</label>
                            <input id="input_conjuge" name="input_conjuge" class="text_placeholder form-control" type="text"  disabled="disabled"  placeholder="Nome completo" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-3">
                            <label for="datepicker">Data de nascimento</label>
                            <div class="input-group date">
                                <input id="datepicker" name="data_nascimento" class="text_placeholder datepicker form-control" type="text">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>			
                        <div class="col-xl-3 offset-xl-2">
                            <label for="id_estado">Naturalidade</label>
                            <select id="id_estado" name="id_estado" class="text_placeholder form-control" >
                                <option value="">Selecione uma opção</option>
                                <?php
                                    $result = "SELECT * FROM estados ORDER BY nome";
                                    $dados = mysqli_query($conn, $result);
                                    while ($row = mysqli_fetch_assoc($dados)) {
                                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-xl-3 offset-xl-1">
                            <label for="id_municipios">Município</label>
                            <select id="id_municipios" name="id_municipios" class="text_placeholder form-control" disabled="true">
                                <option value="">Selecione uma opção</option>
                            </select>
                        </div>			
                    </div>
                </div>
                <div class="container_filiacao col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-10">					
                            <label class="titulo_label" for="">FILIAÇÃO:</label>				
                        </div>
                    </div>		
                    <div class="row form-group">			
                        <div class="col-xl-6">				
                            <label for="nome_pai">Pai</label>
                            <input id="nome_pai" name="nome_pai" type="text" class="text_placeholder form-control" placeholder="Nome completo"/>				
                        </div>
                        <div class="col-xl-6">	
                            <label for="nome_mae">Mãe</label>
                            <input id="nome_mae" name="nome_mae" type="text" class="text_placeholder form-control" placeholder="Nome completo"/>
                        </div>
                    </div>
                </div>
                <div class="container_contatos col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label for="" class="titulo_label">CONTATOS:</label>				
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-3">
                            <label for="celular1">Celular 1</label>
                            <input id="celular1" name="celular1" class="text_placeholder form-control" type="text" maxlength="11" placeholder="Somente números" />
                        </div>
                        <div class="col-xl-3">
                            <label for="celular2">Celular 2</label>
                            <input id="celular2" name="celular2" class="text_placeholder form-control" type="text" maxlength="11" placeholder="Somente números" />
                        </div>
                        <div class="col-xl-3">
                            <label for="tel_fixo">Telefone fixo</label>
                            <input id="tel_fixo" name="tel_fixo" class="text_placeholder form-control" type="text" maxlength="10" placeholder="Somente números" />
                        </div>
                        <div class="col-xl-3">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" class="text_placeholder form-control" type="text"  placeholder="Seu melhor e-mail">
                        </div>
                    </div>
                </div>
                <div class="container_endereco col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label class="titulo_label">ENDEREÇO:</label>				
                        </div>			
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="cep">Cep:</label>
                                <input id="cep" name="cep" class="text_placeholder form-control" type="text" value="" maxlength="9"
                                       onblur="pesquisacep(this.value);"/>
                        </div>
                        <div class="col-xl-4">
                            <label for="rua">Rua:</label>
                            <input id="rua" name="rua" class="text_placeholder form-control" type="text"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="numero">Nº:</label>
                                <input id="numero" name="numero" class="text_placeholder form-control" type="text"/>
                        </div>
                        <div class="col-xl-2">
                            <label for="bairro">Bairro:</label>
                                <input id="bairro" name="bairro" class="text_placeholder form-control" type="text" />
                        </div>
                        <div class="col-xl-2">
                            <label for="cidade">Cidade:</label>
                                <input id="cidade" name="cidade" class="text_placeholder form-control" type="text"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="uf">Estado:</label>
                            <input id="uf" name="uf" class="text_placeholder form-control" type="text"/>
                        </div>
                    </div>                
                </div>
                <div class="container_documentacao col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label class="titulo_label">DOCUMENTOS:</label>				
                        </div>
                    </div>
                        <div class="row form-group">
                            <div class="col-xl-3">
                                <label for="identidade">Nº da Identidade</label>
                                <input id="identidade" name="identidade" class="text_placeholder form-control"/>
                            </div>
                            <div class="col-xl-2">
                                <label for="datepicker">Data da expedição</label>
                                <div class="input-group date">
                                    <input id="datepicker" name="data_exepedicao" type="text" class="text_placeholder datepicker form-control">						
                                    <div class="input-group-addon">
                                        <span class="fas fa-calendar-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <label for="emissor_identidade">Orgão Emissor</label>
                                <input id="emissor_identidade" name="emissor_identidade" class="text_placeholder form-control"/>
                            </div>
                            <div class="col-xl-1">
                                <label for="uf_identidade">UF</label>
                                <select id="uf_identidade" name="uf_identidade" class="text_placeholder form-control">
                                    <option></option>
                                    <?php
                                        $result = "SELECT * FROM estados ORDER BY nome";
                                        $dados = mysqli_query($conn, $result);
                                        while ($row = mysqli_fetch_assoc($dados)) {
                                            echo '<option value="' . $row['id'] . '">' . $row['sigla'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-2 offset-xl-1">
                                <label for="cpf">CPF</label>
                                <input id="cpf" name="cpf" class="text_placeholder form-control" maxlength="11"/>
                            </div>
                        </div> 
                    <div class="row form-group">
                            <div class="col-xl-3">
                                <label for="carteira_trabalho">Carteira de trabalho</label>
                                <input id="carteira_trabalho" name="carteira_trabalho" class="text_placeholder form-control"/>
                            </div>
                            <div class="col-xl-2">
                                <label for="serie_carteira_trabalho">Série</label>
                                <div class="input-group">
                                    <input id="serie_carteira_trabalho" name="serie_carteira_trabalho" type="text" class="text_placeholder form-control">
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <label for="emissor_carteira_trabalho">Orgão Emissor</label>
                                <input id="emissor_carteira_trabalho" name="emissor_carteira_trabalho" class="text_placeholder form-control"/>
                            </div>
                            <div class="col-xl-2 offset-xl-1">
                                <label for="pis_pasep">Pis/Pasep</label>
                                <select id="pis_pasep" name="pis_pasep" class="text_placeholder form-control" >
                                    <option>Selecione uma opção</option>
                                    <option>Pis</option>
                                    <option>Pasep</option>
                                </select>
                            </div>
                            <div class="col-xl-2">
                                <label for="num_pis_pasep">Nº</label>
                                <input id="num_pis_pasep" name="num_pis_pasep" class="text_placeholder form-control"/>
                            </div>
                        </div>
                    <div class="row form-group">
                        <div class="col-xl-3">
                            <label for="titulo_eleitor">Nº Título de eleitor</label>
                            <input id="titulo_eleitor" name="titulo_eleitor" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="zona_titulo">Zona</label>
                            <input id="zona_titulo" name="zona_titulo" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="secao_titulo">Seção</label>
                            <input id="secao_titulo" name="secao_titulo" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-3 offset-xl-1">
                            <label for="alistamento">Nº Cert. Alistamento</label>
                            <input id="alistamento" name="alistamento" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="serie_alistamento">Série</label>
                            <input id="serie_alistamento" name="serie_alistamento" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2">
                            <label for="num_ra">RA</label>
                            <input id="num_ra" name="num_ra" class="text_placeholder form-control"/>
                        </div>
                    </div>
                </div>
                <div class="container_formacao1 col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label class="titulo_label">FORMAÇÃO 1:</label>				
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="formacao1">Grau de instrução</label>
                            <select id="formacao1" name="formacao1" class="text_placeholder form-control" >
                                <option>Selecione uma opção</option>
                                <option value="5">Fundamental I</option>
                                <option value="6">Fundamental II</option>
                                <option value="7">Ens. médio</option>
                                <option value="8">Lic. curta</option>
                                <option value="9">Lic. plena</option>
                                <option value="10">Superior</option>
                                <option value="11">Pós-graduação</option>
                                <option value="12">Doutorado</option>
                                <option value="13">Mestrado</option>
                            </select>
                        </div>
                        <div class="col-xl-2">
                            <label for="curso1">Curso</label>
                            <input id="curso1" name="curso1" disabled="true" type="text" class="text_placeholder form-control" placeholder="curso" />
                        </div>
                        <div class="col-xl-4">
                            <label for="instituicao1">Instituição</label>
                            <input id="instituicao1" name="instituicao1" disabled="true" type="text" class="text_placeholder form-control" placeholder="Nome completo"/>
                        </div>
                        <div class="col-xl-1">
                            <label for="uf_formacao1">UF</label>                        
                            <select id="uf_formacao1" name="uf_formacao1" disabled="true" class="text_placeholder form-control">
                                <option></option>
                                <?php
                                    $result = "SELECT * FROM estados ORDER BY nome";
                                    $dados = mysqli_query($conn, $result);
                                    while ($row = mysqli_fetch_assoc($dados)) {
                                        echo '<option value="' . $row['id'] . '">' . $row['sigla'] . '</option>';                                    
                                    }
                                ?>
                            </select>                        
                        </div>
                        <div class="col-xl-3">
                            <label  for="local_formacao1">Local</label>
                            <select id="local_formacao1" name="local_formacao1" disabled="true" class="text_placeholder form-control">
                            </select>                        
                        </div>                    
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-4">
                            <label for="registro_formacao1">Registro</label>
                            <input id="registro_formacao1" name="registro_formacao1" disabled="true" type="text" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-3">
                            <label for="orgao_formacao1">Órgão</label>
                            <input id="orgao_formacao1" name="orgao_formacao1" disabled="true" type="text" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2">
                            <label for="data_formacao1">Data</label>
                            <div class="input-group date">
                                <input id="data_formacao1" name="data_formacao1" disabled="true" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>                    
                        <div class="btn_formacao col-xl-2 offset-xl-1">
                            <label id="transparente" for="">Formação</label>
                            <a href="javascript:void(0)" id="adicionarcampo" class="btn btn-primary">+ Formação</a>
                        </div>
                    </div>                
                </div> 
                <div  class="inputs"></div>
                <div class="container_emprego col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label for="" class="titulo_label">VÍNCULO EMPREGATÍCIO:</label>				
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="forma_contratual">Forma contratual</label>
                            <select id="forma_contratual" name="forma_contratual" class="text_placeholder form-control" type="text">
                                <option>Escolha uma opção</option>
                                <option value="14">Concurso</option>
                                <option value="15">Contrato</option>
                            </select>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="ano_concurso">Ano do concurso</label>
                            <input id="ano_concurso" name="ano_concurso" disabled="true" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="datepicker">Data de admissão</label>
                            <div class="input-group date">
                                <input id="datepicker" name="data_admissao" type="text" class="text_placeholder datepicker form-control"/>						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-1">
                            <label for="matricula">Matrícula</label>
                            <input id="matricula" name="matricula" class="text_placeholder form-control" type="text"/>
                        </div>                                        
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="cargo">Cargo</label>
                            <input id="cargo" name="cargo" class="text_placeholder form-control" type="text"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="funcao">Função</label>
                            <input id="funcao" name="funcao" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="disciplina">Disciplina</label>                        
                            <input id="disciplina" name="disciplina" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-3 offset-xl-1">
                            <label for="lotacao">Local de lotação</label>                        
                            <input id="lotacao" name="lotacao" class="text_placeholder form-control" type="text"/>
                        </div>                                     
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-2">
                            <label for="acumulo">Acumula cargo público?</label>
                            <select id="acumulo" name="acumulo" class="text_placeholder form-control">
                                <option></option>
                                <option value="16">Sim</option>
                                <option value="17">Não</option>
                            </select>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="rede_acumulo">Rede</label>
                            <input id="rede_acumulo" name="rede_acumulo" disabled="true" class="text_placeholder form-control"/>                            
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="matricula_acumulo">Matrícula</label>                        
                            <input id="matricula_acumulo" name="matricula_acumulo" disabled="true" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-3 offset-xl-1">
                            <label for="lotacao_acumulo">Local de lotação</label>                        
                            <input id="lotacao_acumulo" name="lotacao_acumulo" disabled="true" class="text_placeholder form-control" type="text"/>
                        </div>                                     
                    </div>
                </div>
                <div class="container_permuta col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label for="" class="titulo_label">PERMUTA:</label>				
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-1">
                            <label for="permutado">Permutado?</label>
                            <select id="permutado" name="permutado" class="text_placeholder form-control" type="text">
                                <option></option>
                                <option value="18">Sim</option>
                                <option value="19">Não</option>
                            </select>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="local_origem_permuta">Local de origem</label>
                            <input id="local_origem_permuta" name="local_origem_permuta" disabled="true" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <label for="municipio_permuta">Municipio da permuta</label>
                            <input id="municipio_permuta" name="municipio_permuta" disabled="true" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-4 offset-xl-1">
                            <label for="nome_permutado">Nome do permutado</label>                        
                            <input id="nome_permutado" name="nome_permutado" disabled="true" class="text_placeholder form-control" type="text"/>
                        </div>                                        
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-1">
                            <label for="cedido">Cedido?</label>
                            <select id="cedido" name="cedido" class="text_placeholder form-control" type="text">
                                <option></option>
                                <option value="20">Sim</option>
                                <option value="21">Não</option>
                            </select>
                        </div>
                        <div class="col-xl-4">
                            <label for="local_cedido">Local / Setor</label>
                            <input id="local_cedido" name="local_cedido" disabled="true" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-1 offset-xl-2">
                            <label for="remanejado">Remanejado?</label>
                            <select id="remanejado" name="remanejado" class="text_placeholder form-control" type="text">
                                <option></option>
                                <option value="22">Sim</option>
                                <option value="23">Não</option>
                            </select>
                        </div>
                        <div class="col-xl-4">
                            <label for="local_remanejado">Local / Setor</label>
                            <input id="local_remanejado" name="local_remanejado" disabled="true" class="text_placeholder form-control"/>
                        </div>
                    </div>
                </div>
                <div class="container_dependentes col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-xl-3">
                            <label for="" class="titulo_label">Dependentes:</label>				
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <label for="dependente1">Dependente 1</label>
                            <br>
                            <label for="nome_dependente1">Nome</label>                         
                            <input id="nome_dependente1" name="nome_dependente1" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="nascimento_dependente1">Nascimento</label>
                            <div class="input-group date">
                                <input id="nascimento_dependente1" name="nascimento_dependente1" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="parentesco1">Grau de parentesco</label>
                            <input id="parentesco1" name="parentesco1" class="text_placeholder form-control"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <label for="dependente2">Dependente 2</label>
                            <br>
                            <label for="nome_dependente2">Nome</label>                         
                            <input id="nome_dependente2" name="nome_dependente2" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="nascimento_dependente2">Nascimento</label>
                            <div class="input-group date">
                                <input id="nascimento_dependente2" name="nascimento_dependente2" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="parentesco2">Grau de parentesco</label>
                            <input id="parentesco2" name="parentesco2" class="text_placeholder form-control"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <label for="nome_dependente3">Dependente 3</label>
                            <br>
                            <label for="nome_dependente3">Nome</label>                         
                            <input id="nome_dependente3" name="nome_dependente3" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="nascimento_dependente3">Nascimento</label>
                            <div class="input-group date">
                                <input id="nascimento_dependente3" name="nascimento_dependente3" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="parentesco3">Grau de parentesco</label>
                            <input id="parentesco3" name="parentesco3" class="text_placeholder form-control"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <label for="dependente4">Dependente 4</label>
                            <br>
                            <label for="nome_dependente4">Nome</label>                         
                            <input id="nome_dependente4" name="nome_dependente4" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="nascimento_dependente4">Nascimento</label>
                            <div class="input-group date">
                                <input id="nascimento_dependente4" name="nascimento_dependente4" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="parentesco4">Grau de parentesco</label>
                            <input id="parentesco4" name="parentesco4" class="text_placeholder form-control"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <label for="dependente5">Dependente 5</label>
                            <br>
                            <label for="nome_dependente5">Nome</label>                         
                            <input id="nome_dependente5" name="nome_dependente5" class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="nascimento_dependente5">Nascimento</label>
                            <div class="input-group date">
                                <input id="nascimento_dependente5" name="nascimento_dependente5" type="text" class="text_placeholder datepicker form-control">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1">
                            <br>
                            <label for="parentesco5">Grau de parentesco</label>
                            <input id="parentesco5" name="parentesco5" class="text_placeholder form-control"/>
                        </div>
                    </div>
                </div>
                <div class="container_btn col-xl-8 offset-xl-2">
                    <div class="row form-group">
                        <div class="col-xl-6">
                            <input class="btn btn-primary btn-lg" type="submit" value="Enviar cadastro"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>        	
        <script src="js/bootstrap-datepicker.min.js"></script> 
	<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
    </body>
</html>
