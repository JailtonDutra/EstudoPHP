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
            <div class="col-xl-10 offset-xl-1">
                <div class="row">
                    <div id="titulo" class="col-xl-10 offset-xl-1">
                        <label  for="">CADASTRO DE USUÁRIOS</label>
                    </div>
                </div>
            </div>
            <div class="container_dados_pessoais col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-xl-10">
                        <label for="" class="titulo_label">DADOS PESSOAIS:</label>
                    </div>
                </div>		
                <div class="row form-group">			
                    <div class="col-xl-8">
                        <label for="">Nome</label>
                        <input type="text" class="text_placeholder form-control" placeholder="Nome completo" />
                    </div>
                    <div class="col-xl-2 offset-xl-2">
                        <label for="">Sexo</label>
                        <select class="form-control" id="sexo">
                            <option></option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>								
                </div>
                <div class="row form-group">
                    <div class="col-xl-2">
                        <label for="">Estado civil</label>
                        <select class="form-control" id="select_estadocivil">
                            <option value="0"></option>
                            <option value="1">Solteiro(a)</option>
                            <option value="2">Casado(a)</option>
                            <option value="3">Divorciado(a)</option>
                            <option value="4">Viuvo(a)</option>
                        </select>
                    </div>
                    <div class="col-xl-8 offset-xl-2">
                        <label for="" id="lbl_conjuge" >Nome do cônjuge</label>
                        <input disabled="disabled"  type="text" class="text_placeholder form-control" id="input_conjuge" placeholder="Nome completo" />
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xl-3">
                        <label for="">Data de nascimento</label>
                        <div class="input-group date">
                            <input type="text" class="form-control" id="data_nascimento">						
                            <div class="input-group-addon">
                                <span class="fas fa-calendar-alt"></span>
                            </div>
                        </div>
                    </div>			
                    <div class="col-xl-3 offset-xl-2">
                        <label for="">Naturalidade</label>
                        <select class="form-control" id="id_estado" name="id_estado">
                            <option value=""></option>
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
                        <label for="">Município</label>
                        <select disabled="true" class="text_placeholder form-control" name="id_municipios" id="id_municipios">
                            <option value=""></option>
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
                        <label for="">Pai</label>
                        <input type="text" class="text_placeholder form-control" placeholder="Nome completo" />				
                    </div>
                    <div class="col-xl-6">	
                        <label for="">Mãe</label>
                        <input type="text" class="text_placeholder form-control" placeholder="Nome completo" />
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
                        <label for="">Celular 1</label>
                        <input type="text" class="text_placeholder form-control" name="celular" id="celular1" maxlength="11" placeholder="Somente números" />
                    </div>
                    <div class="col-xl-3">
                        <label for="">Celular 2</label>
                        <input type="text" class="text_placeholder form-control" name="celular" id="celular2" maxlength="11" placeholder="Somente números" />
                    </div>
                    <div class="col-xl-3">
                        <label for="">Telefone fixo</label>
                        <input type="text" class="text_placeholder form-control" name="fixo" id="fixo" maxlength="10" placeholder="Somente números" />
                    </div>
                    <div class="col-xl-3">
                        <label for="">E-mail</label>
                        <input type="text" class="text_placeholder form-control" placeholder="Seu melhor e-mail">
                    </div>
                </div>
            </div>
            <div class="container_endereco col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-xl-3">
                        <label for="" class="titulo_label">ENDEREÇO:</label>				
                    </div>			
                </div>
                <div class="row form-group">
                    <div class="col-xl-2">
                        <label for="">Cep:</label>
                            <input class="form-control" name="cep" type="text" id="cep" value="" maxlength="9"
                                   onblur="pesquisacep(this.value);"/>
                    </div>
                    <div class="col-xl-4">
                        <label>Rua:</label>
                        <input class="text_placeholder form-control" name="rua" type="text" id="rua"/>
                    </div>
                    <div class="col-xl-1">
                        <label>Nº:</label>
                            <input class="text_placeholder form-control" name="numero" type="text" id="numero"/>
                    </div>
                    <div class="col-xl-2">
                        <label>Bairro:</label>
                            <input class="text_placeholder form-control" name="bairro" type="text" id="bairro"/>
                    </div>
                    <div class="col-xl-2">
                        <label>Cidade:</label>
                            <input class="text_placeholder form-control" name="cidade" type="text" id="cidade"/>
                    </div>
                    <div class="col-xl-1">
                        <label>Estado:</label>
                        <input class="text_placeholder form-control" name="uf" type="text" id="uf"/>
                    </div>
                </div>                
            </div>
            <div class="container_documentacao col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-xl-3">
                        <label for="" class="titulo_label">DOCUMENTOS:</label>				
                    </div>
                </div>
                    <div class="row form-group">
                        <div class="col-xl-3">
                            <label>Nº da Identidade</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2">
                            <label>Data da expedição</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" id="data_expedicao">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <label>Orgão Emissor</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-1">
                            <label>UF</label>
                            <select class="form-control" id="uf_identidade" name="uf_identidade">
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
                            <label>CPF</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                    </div> 
                <div class="row form-group">
                        <div class="col-xl-3">
                            <label>Carteira de trabalho</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2">
                            <label>Série</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <label>Orgão Emissor</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                        <div class="col-xl-2">
                            <label>Pis/Pasep</label>
                            <select class="form-control" id="pis_pasep" name="pis_pasep">
                                <option>Pis</option>
                                <option>Pasep</option>
                            </select>
                        </div>
                        <div class="col-xl-2">
                            <label>Nº</label>
                            <input class="text_placeholder form-control"/>
                        </div>
                    </div>
                <div class="row form-group">
                    <div class="col-xl-3">
                        <label>Título</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                    <div class="col-xl-1">
                        <label>Zona</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                    <div class="col-xl-1">
                        <label>Seção</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                    <div class="col-xl-3">
                        <label>Nº Cert. Alistamento</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                    <div class="col-xl-1">
                        <label>Série</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                    <div class="col-xl-3">
                        <label>RA</label>
                        <input class="text_placeholder form-control"/>
                    </div>
                </div>
            </div>
            <div  class="container_formacao1 col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-xl-3">
                        <label for="" class="titulo_label">FORMAÇÃO 1:</label>				
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xl-2">
                        <label for="">Grau de instrução</label>
                        <select class="form-control" id="grau_instrucao1" name="grau_instrucao1">
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
                        <label for="">Curso</label>
                        <input disabled="true" type="text" class="text_placeholder form-control" name="curso1" id="curso1"placeholder="curso" />
                    </div>
                    <div class="col-xl-4">
                        <label for="">Instituição</label>
                        <input disabled="true" type="text" class="text_placeholder form-control" name="instituicao1" id="instituicao1" placeholder="Nome completo" />
                    </div>
                    <div class="col-xl-1">
                        <label for="">UF</label>                        
                        <select disabled="true" class="text_placeholder form-control" name="uf_formacao1" id="uf_formacao1">
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
                        <label  for="">Local</label>
                        <select disabled="true" class="form-control" id="local_formacao1" name="local_formacao1">
                        </select>                        
                    </div>                    
                </div>
                <div class="row form-group">
                    <div class="col-xl-4">
                        <label for="">Registro</label>
                        <input type="text" class="text_placeholder form-control" name="registro_formacao1" id="registro_formacao1"/>
                    </div>
                    <div class="col-xl-3">
                        <label for="">Órgão</label>
                        <input type="text" class="text_placeholder form-control" name="orgao_formacao1" id="orgao_formacao1"/>
                    </div>
                    <div class="col-xl-2">
                        <label for="">Data</label>
                        <div class="input-group date">
                                <input type="text" class="form-control" id="data_formacao1">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                    </div>
                </div>                
            </div>
            <div class="inputs">
                </div>
            <div class="container_botao col-xl-8 offset-xl-2">
                
            <a href="javascript:void(0)" id="adicionarcampo" class="btn btn-primary">Adicionar Formação</a>
            </div>            
            


            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="container_vazio col-xl-8 offset-xl-2">
                <div class="col-xl-12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                     <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label>-------------------------------------------------------</label>
                </div>
            </div>
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
<!--
        <script type="text/javascript">
            $('#data_emissao').datepicker({
                format: 'dd/mm/yyyy',
                language:"pt-BR",
            });
        </script>
-->
    </body>
</html>
