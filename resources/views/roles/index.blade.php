@extends('layouts.app', [
    'title' => __('Cadastrar Escola'),
    'class' => '',
    'folderActive' => 'laravel-examples',
    'elementActive' => 'role',
])

@section('content')
    <br>
    <br>
    <br>
    <div class="container-fluid mt--6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Cadastrar Escola</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('salvar-escola') }}" class="form-horizontal">
                    @csrf

                    <!-- Nome da Escola -->
                    <div class="form-group row">
                        <label for="Nome" class="col-sm-2 col-form-label">Nome da Escola</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                    </div>
                    <!-- CEP -->
                    <div class="form-group row">
                        <label for="CEP" class="col-sm-2 col-form-label">CEP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cep" id="cep">
                        </div>
                    </div>
                    <!-- Rua -->
                    <div class="form-group row">
                        <label for="Rua" class="col-sm-2 col-form-label">Rua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="rua" id="rua">
                        </div>
                    </div>
                    <!-- Bairro -->
                    <div class="form-group row">
                        <label for="Bairro" class="col-sm-2 col-form-label">Bairro</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bairro" id="bairro">
                        </div>
                    </div>
                    
                    <!-- Botão de envio -->
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-info btn-round">Cadastrar</button>
                        </div>
                    </div>
                    @csrf 
                </form>

            </div>
            @if (session('success'))
                <div class="card-footer">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $('input[name="cep"]').on('blur', function() {
            function limpa_formulario_cep() {
                $('input[name="rua"]').val('');
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

                $.getJSON("https://viacep.com.br/ws/" + cep_exibido + "/json/?callback=?", function(dados) {
                    if (!("erro" in dados)) {
                        $('input[name="rua"]').val(dados.logradouro);
                        $('input[name="bairro"]').val(dados.bairro);
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
        $('form').on('submit', function (e) {
            e.preventDefault();
            
            var form = $(this);
            var url = form.attr('action');
            
            $.ajax({
                type: 'POST',
                url: url,
                data: form.serialize(),
                success: function (response) {
                    // Limpar campos do formulário
                    form.trigger('reset');
                    
                    // Exibir mensagem de sucesso
                    $('.alert-success').text(response.message).show();
                }
            });
        });
    </script>
@endsection
