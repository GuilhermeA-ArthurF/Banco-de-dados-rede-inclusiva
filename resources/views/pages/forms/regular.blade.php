@extends('layouts.app', [
'class' => '',
'folderActive' => 'forms',
'elementActive' => 'regular-forms'
])
<!-- TELA DE CADASTRO DE FORMULARIO -->
@section('content')
<br>
<br>
<br>
<div class="col-md-12">
    <div class="card ">
        <div class="card-header ">
            <h4 class="card-title">Cadastrar aluno</h4>
        </div>
        <div class="card-body ">
            <form method="post" action="/" class="form-horizontal">
                <!-- Dados Pessoais -->
                <div class="row">
                    <label class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Sobrenome</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="sobrenome">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Idade</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="number" class="form-control" name="idade">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Sexo</label>
                    <div class="col-sm-10 checkbox-radios">
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino"
                                    value="Masculino"> Masculino
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino"
                                    checked> Feminino
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>
                </div>


                <!-- Contato -->
                <div class="row">
                    <label class="col-sm-2 col-form-label">Número de telefone</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefone">
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
                            <label class="col-sm-2 col-form-label">Rua</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rua">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cidade">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">CEP</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cep">
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
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="rua">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Rua</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cidade">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Periodo do aluno</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cep">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Turma</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cep">
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
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">CID</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cep">
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="card-footer ">
            <button type="submit" class="btn btn-info btn-round">Cadastrar</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection