@extends('layout.main')

@section('content') 
    <div class="container container-cadastro">
        <form class="content" action="./cliente" method="POST">
            <div class="header">
                <h2>Cadastrar Novo Cliente</h2>
                <a href="./">Voltar</a>
            </div>
            @csrf
            <div class="form-group col-md-12">
                <label class="form-label">
                    <span class="legend">Nome:</span>
                </label>
                <input class="form-control" type="text" name="nome" value=""/>
            </div>

            <div class="form-group col-md-4">
                <label class="form-label">
                    <span class="legend">Telefone:</span>
                </label>
                <input class="form-control" type="text" name="telefone" value=""/>
            </div>

            <div class="form-group col-md-4">
                <label class="form-label">
                    <span class="legend">CPF:</span>
                </label>
                <input class="form-control" type="text" name="cpf" value=""/>
            </div>

            <div class="form-group col-md-4">
                <label class="form-label">
                    <span class="legend">Placa do Carro:</span>
                </label>
                <input class="form-control" type="text" name="placa_do_carro" value=""/>
            </div>

            <input type="submit" class="btn" value="CRIAR CLIENTE">
        </form>
    </div>
@endsection
