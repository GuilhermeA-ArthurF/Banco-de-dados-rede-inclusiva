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
                            <label class="col-sm-2 col-form-label">Rua</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Rua">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Cidade">
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
                    <div class="row">
                        <label class="col-sm-2 col-form-label">CID</label>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="CID">
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


