//função para habilitar ou desabilitar o input conjuge
$('#estado_civil').on('change', function () {
    var estado_civil = $('#estado_civil').val();    
    var estado = 2;
    if (estado_civil == estado) {
        $("#input_conjuge").removeAttr('disabled');
    } else {
        $("#input_conjuge").attr('disabled','true');
    }
});

//função do datepicker
$(document).ready(function(){ 
    $('.datepicker').datepicker({        
        format: "dd/mm/yyyy",	
        language: "pt-BR",        
    });  
      
});

//função de formatação dos campos telefone (máscara)
$(document).ready(function () {
    $('#celular1').mask('(00)00000-0000');
    $('#celular2').mask('(00)00000-0000');
    $('#tel_fixo').mask('(00)0000-0000');
});

//função para habilitar o input município depois que o input estado for selecionado
$('#id_estado').on('change', function () {
    if ($(this).val()) {
        $.getJSON('listarCidades.php?search=', {id_estado: $(this).val(), ajax: 'true'}, function (j) {
            var options = '<option value=""></option>';
            for (var i = 0; i < j.length; i++) {
                options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
            }
            $('#id_municipios').html(options).show();
            $('#id_municipios').removeAttr('disabled');
        });
    } else {
        $('#id_municipios').html('<option value=""></option>');
        $('#id_municipios').attr('disabled', 'true');
    }
});

//função para completar os campos do endereço após selecionar o CEP
$(document).ready(function () {
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
        $("#numero").val("");
    }
    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            //Valida o formato do CEP.
            if (validacep.test(cep)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");
                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

//função para habilitar ou desabilitar o input curso
$('#formacao1').on('change', function () {
    var formacao = $('#formacao1').val();
    if (formacao == 5 || formacao == 6) {
        $("#curso1").attr('disabled','true');
        $("#instituicao1").attr('disabled','true');
        $("#uf_formacao1").attr('disabled','true');
        $("#local_formacao1").attr('disabled','true');
        $("#registro_formacao1").attr('disabled','true');
        $("#orgao_formacao1").attr('disabled','true');
        $("#data_formacao1").attr('disabled','true');
        
    }else if(formacao == 7){
        $("#curso1").attr('disabled','true');
        $("#instituicao1").removeAttr('disabled');
        $("#uf_formacao1").removeAttr('disabled');
        $("#local_formacao1").removeAttr('disabled');
        $("#registro_formacao1").removeAttr('disabled');
        $("#orgao_formacao1").removeAttr('disabled');
        $("#data_formacao1").removeAttr('disabled');
    }else {
        $("#curso1").removeAttr('disabled');
        $("#instituicao1").removeAttr('disabled');
        $("#uf_formacao1").removeAttr('disabled');
        $("#local_formacao1").removeAttr('disabled');
        $("#registro_formacao1").removeAttr('disabled');
        $("#orgao_formacao1").removeAttr('disabled');
        $("#data_formacao1").removeAttr('disabled');
    }
});
//função para habilitar ou desabilitar o input curso
function formacao2() {
    $('#formacao2').on('change', function () {
        var formac = $('#formacao2').val();
        if (formac == 5 || formac == 6) {
            $("#curso2").attr('disabled','true');
            $("#instituicao2").attr('disabled','true');
            $("#uf_formacao2").attr('disabled','true');
            $("#local_formacao2").attr('disabled','true');
            $("#registro_formacao2").attr('disabled','true');
            $("#orgao_formacao2").attr('disabled','true');
            $("#data_formacao2").attr('disabled','true');

        }else if(formac == 7){
            $("#curso2").attr('disabled','true');
            $("#instituicao2").removeAttr('disabled');
            $("#uf_formacao2").removeAttr('disabled');
            $("#local_formacao2").removeAttr('disabled');
            $("#registro_formacao2").removeAttr('disabled');
            $("#orgao_formacao2").removeAttr('disabled');
            $("#data_formacao2").removeAttr('disabled');
        }else {
            $("#curso2").removeAttr('disabled');
            $("#instituicao2").removeAttr('disabled');
            $("#uf_formacao2").removeAttr('disabled');
            $("#local_formacao2").removeAttr('disabled');
            $("#registro_formacao2").removeAttr('disabled');
            $("#orgao_formacao2").removeAttr('disabled');
            $("#data_formacao2").removeAttr('disabled');
        }
    });
}

//função para habilitar o input município depois que o input estado for selecionado
$('#uf_formacao1').on('change', function () {
    if ($(this).val()) {
        $.getJSON('listarCidades.php?search=', {id_estado: $(this).val(), ajax: 'true'}, function (j) {
            var options = '<option value=""></option>';
            for (var i = 0; i < j.length; i++) {
                options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
            }
            $('#local_formacao1').html(options).show();
            $('#local_formacao1').removeAttr('disabled');
        });
    }
});


$(document).ready(function () {
    var wrapper = $(".inputs");
    var add_button = $("#adicionarcampo");

    var teste = '<option value=' + "' . $row['id'] . '">' ' + '. $row[' + 'sigla' + '] . '+'</option>' + ';'
    var x = 1;
    var i = 1;
    $(add_button).click(function (e) {
        e.preventDefault();
        var length = wrapper.find("input:text.textAdded").length;
        if (x < 2) {
            x++;
            i++;
            $(wrapper).append('<div class="container_formacao'+(i)+' col-xl-8 offset-xl-2">'
                    + '<div class="row">'
                    + '<div class="col-xl-3">'
                    + '<label for="" class="titulo_label">FORMAÇÃO '+(i)+':</label>'
                    + '</div>'
                    + '</div>'
                    + '<div class="row form-group">'
                    + '<div class="col-xl-2">'
                    + '<label for="">Grau de instrução</label>'
                    + '<select id="formacao'+(i)+'" name="formacao'+(i)+'" class="text_placeholder form-control" >'
                    + '<option value="5">Fundamental I</option>'
                    + '<option value="6">Fundamental II</option>'
                    + '<option value="7">Ens. médio</option>'
                    + '<option value="8">Lic. curta</option>'
                    + '<option value="9">Lic. plena</option>'
                    + '<option value="10">Superior</option>'
                    + '<option value="11">Pós-graduação</option>'
                    + '<option value="12">Doutorado</option>'
                    + '<option value="13">Mestrado</option>'
                    + '</select>'
                    + '</div>'
                    + '<div class="col-xl-2">'
                    + '<label for="">Curso</label>'                    
                    + '<input id="curso'+(i)+'" name="curso'+(i)+'" disabled="true" type="text" class="text_placeholder form-control" placeholder="curso"/>'
                    + '</div>'
                    + '<div class="col-xl-4">'
                    + '<label for="">Instituição</label>'                    
                    +'<input id="instituicao'+(i)+'" name="instituicao'+(i)+'" disabled="true" type="text" class="text_placeholder form-control" placeholder="Nome completo"/>'
                    + '</div>'
                    + '<div class="col-xl-1">'
                    + '<label for="">UF</label>'                    
                    + '<select id="uf_formacao'+(i)+'" name="uf_formacao'+(i)+'" disabled="true" class="text_placeholder form-control">'
                    + '<?php'
                    + '$result = "SELECT * FROM estados ORDER BY nome";'
                    + '$dados = mysqli_query($conn, $result);'
                    + 'while ($row = mysqli_fetch_assoc($dados)) {'
                    + teste /*'<option value=' + "' . $row['id'] . '">' ' + '. $row[' + 'sigla' + '] . '+'</option>' + ';'*/
                    + '}'
                    + '?>'
                    + '</select>'
                    + '</div>'
                    + '<div class="col-xl-3">'
                    + '<label  for="">Local</label>'                    
                    + '<select id="local_formacao'+(i)+'" name="local_formacao'+(i)+'" disabled="true" class="text_placeholder form-control">'
                    + '</select>'
                    + '</div>'
                    + '</div>'
                    + '<div class="row form-group">'
                    + '<div class="col-xl-4">'
                    + '<label for="">Registro</label>'
                    + '<input id="registro_formacao'+(i)+'" name="registro_formacao'+(i)+'" disabled="true" type="text" class="text_placeholder form-control"/>'
                    + '</div>'
                    + '<div class="col-xl-3">'
                    + '<label for="">Órgão</label>'
                    + '<input id="orgao_formacao'+(i)+'" name="orgao_formacao'+(i)+'" disabled="true" type="text" class="text_placeholder form-control"/>'
                    + '</div>'
                    + '<div class="col-xl-2">'
                    + '<label for="">Data</label>'
                    + '<div class="input-group date">'
                    + '<input id="data_formacao'+(i)+'" name="data_formacao'+(i)+'" disabled="true" type="text" class="text_placeholder datepicker form-control">'
                    + '<div class="input-group-addon">'
                    + '<span class="fas fa-calendar-alt"></span>'
                    + '</div>'
                    + '</div>'
                    + '</div>'
                    + '</div>'
                    + '<a href="#"class=" btn btn-danger remove_field">Remover esta formação</a>'
                    + '</div>');
                    $('#formacao2').bind('change', formacao2());
        }
    });
    $(wrapper).on("click", ".remove_field", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        i--;
    })
});
//função para habilitar ou desabilitar o input contrato
$('#forma_contratual').on('change', function () {
    var formaContrato = $('#forma_contratual').val();    
    var estado = 14;
    if (formaContrato == estado) {
        $("#ano_concurso").removeAttr('disabled');
    } else {
        $("#input_conjuge").attr('disabled','true');
    }
});
//função para habilitar ou desabilitar o input acumulo cargo publico
$('#acumulo').on('change', function () {
    var formaContrato = $('#acumulo').val();    
    var estado = 16;
    if (formaContrato == estado) {
        $("#rede_acumulo").removeAttr('disabled');
        $("#matricula_acumulo").removeAttr('disabled');
        $("#lotacao_acumulo").removeAttr('disabled');
    } else {
        $("#rede_acumulo").attr('disabled','true');
        $("#matricula_acumulo").attr('disabled','true');
        $("#lotacao_acumulo").attr('disabled','true');
    }
});
//permutado
$('#permutado').on('change', function () {
    var cedido = $('#permutado').val();    
    var estado = 18;
    if (cedido == estado) {
        $("#local_origem_permuta").removeAttr('disabled');
        $("#municipio_permuta").removeAttr('disabled');
        $("#nome_permutado").removeAttr('disabled');
    } else {
        $("#local_origem_permuta").attr('disabled','true');        
        $("#municipio_permuta").attr('disabled','true');        
        $("#nome_permutado").attr('disabled','true');        
    }
});
//cedido
$('#cedido').on('change', function () {
    var cedido = $('#cedido').val();    
    var estado = 20;
    if (cedido == estado) {
        $("#local_cedido").removeAttr('disabled');
    } else {
        $("#local_cedido").attr('disabled','true');        
    }
});
//remanejado
$('#remanejado').on('change', function () {
    var remanejado = $('#remanejado').val();    
    var estado = 22;
    if (remanejado == estado) {
        $("#local_remanejado").removeAttr('disabled');
    } else {
        $("#local_remanejado").attr('disabled','true');        
    }
});