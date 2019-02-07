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
        <style>
            .asdivs{
                margin: 20px;
            }
            #capiroto{

                padding: 5px;
                margin: 80px;
            }
            .btn{
                margin-left: 15px;
            }
        </style>        
    </head>

    <body>
        <div class="container-fluid">  
            <form method="POST" action="dao/processa.php">
                <div id="capiroto" class="col-xl-8">
                    <div class="row form-group">
                        <div class="col-xl-3">
                            <label for="">Data de nascimento</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" id="data_nascimento" name="data">						
                                <div class="input-group-addon">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="row form-group">
                            <div class="col-xl-4">
                                <label for="">Nome</label>
                                <input type="text" class="text_placeholder form-control" id="nome" name="nome" placeholder="Nome completo" />
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-4">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <input class="btn btn-primary" type="submit" value="Cadastrar"/>
                    </div>
                </div>
             </form>
        </div>
    
        

                                
<!--
                    
<div id="" class="asdivs row form-group">
                            <div class="col-xl-4 form-control">
                                <label>Nome</label>
                                    <input type="text" name="nome" id="nome"/>
                                    <label>email</label>
                                    <input type="text" name="email" id="email"/>
                            </div>
                        </div>
                        <div class="row form-control">
                            <input class="btn btn-primary" type="submit" value="Cadastrar"/>
                        </div> 
 -->       
        
       
        
        
        
        
        
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

