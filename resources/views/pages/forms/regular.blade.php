@extends('layouts.app', [
'class' => '',
'folderActive' => 'forms',
'elementActive' => 'regular-forms'
])


<!-- TELA DE CADASTRO DE FORMULARIO -->
@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<br>
<br>
<br>
<br>
<br>
<div class="col-md-12">
    <div class="card">
        <div class="card-header ">
            <h4 class="card-title">Cadastrar aluno</h4>
        </div>
        <div class="card-body ">
            <form method="post" action="/" class="form-horizontal">
                <!-- Dados Pessoais -->
                <div class="row">
                    <label class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Nome">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Sobrenome</label>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Sobrenome">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Idade</label>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <input type="number" class="form-control" name="Idade">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Sexo</label>
                    <div class="col-sm-10 checkbox-radios">
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="Sexo" id="masculino"
                                    value="Masculino"> Masculino
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="Sexo" id="feminino" value="Feminino"
                                    checked> Feminino
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>
                </div>


                <!-- Contato -->
                <div class="row">
                    <label class="col-sm-2 col-form-label">Número de telefone</label>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="numeroTelefone">
                        </div>
                    </div>
                </div>

                <!-- Endereço -->
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Endereço</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">CEP</label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="CEP">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="localidade">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Rua</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="logradouro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Bairro</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="bairro">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Escola -->
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Escola</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Selecione a escola</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select name="select">
                                        <option value="">Escola1 </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NECESSIDADES -->
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Necessidades</h4>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Possui laudo?</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="masculino"
                                        value="Masculino"> Sim
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="feminino"
                                        value="Feminino" checked> Não
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Patologia</label>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cidade">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">CID</h4>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">CID</label>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="codigo_cid" id="codigo_cid"
                                    placeholder="Pesquisar por nome ou código CID">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-info btn-round">Cadastrar</button>
                </div>
        </div>
    </div>
</div>


</form>
</div>
</div>
</div>


<script>
    $('input[name="CEP"]').on('blur', function () {
        function limpa_formulario_cep() {
            $('input[name="logradouro"]').val('');
            $('input[name="localidade"]').val('');
            $('input[name="bairro"]').val('');
        }

        var cep = $(this).val();
        var cep_exibido = cep;
        cep = cep.replace(/-/g, '');

        if (cep.length <= 8) {
            cep = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
        }
        $(this).val(cep);

        if (cep_exibido.match(/^\d{8}$/)) {
            limpa_formulario_cep();

            $.getJSON("https://viacep.com.br/ws/" + cep_exibido + "/json/?callback=?", function (dados) {
                if (!("erro" in dados)) {
                    $('input[name="logradouro"]').val(dados.logradouro);
                    $('input[name="bairro"]').val(dados.bairro);
                    $('input[name="localidade"]').val(dados.localidade);
                } else {
                    limpa_formulario_cep();
                    alert("CEP não encontrado.");
                }
            });
        } else {
            limpa_formulario_cep();
            alert("Formato de CEP inválido.");
        }
    });
</script>
<script>
    var j = jQuery.noConflict();

    j(document).ready(function() {
        j("#codigo_cid").autocomplete({
            source: function(request, response) {
                j.ajax({
                    url: "http://localhost:8080/cid10/",
                    dataType: "json",
                    data: {
                        termo: request.term
                    },
                    success: function(data) {
                        var term = request.term.toLowerCase();
                        var filteredData = data.filter(function(item) {
                
                            return item.nome.toLowerCase().includes(term) || item.codigo.toLowerCase().includes(term);
                        }).map(function(item) {
                            return {
                                label: item.codigo + ": " + item.nome,
                                value: item.codigo
                            };
                        });

                        var maxResults = 5;
                        response(filteredData.slice(0, maxResults));
                    }
                });
            },
            minLength: 3,
            select: function(event, ui) {
                j("#codigo_cid").val(ui.item.value);
            }
        });
    });
</script>


@endsection