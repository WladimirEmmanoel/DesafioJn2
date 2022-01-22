@extends('layout.main')
@section('content')     
    <div class="container container-index">
        <div class="content">
            <a class="btn-cadastrar-cliente" href="./cliente">Cadastrar Novo Cliente</a>
            <?php
                $clientes = DB::select('select * from clientes');
                if(!empty($clientes)):?>
                    <ul class="list-clientes">
                        <?php foreach($clientes as $cliente):?>
                            <li>
                                <span><?=$cliente->nome;?></span>
                                <div class="drop">
                                    Opções
                                    <ul>
                                        <li>
                                            <a href="#" class="js_editar_cliente" data="id-<?=$cliente->id;?>">Editar Cliente</a>
                                        </li>
                                        <li>
                                            <a href="#">Deletar Cliente</a>
                                        </li>
                                        <li>
                                            <a href="#">Informações do Cliente</a>
                                        </li>
                                    <ul>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php else:?>
                    <p>Nenhum Cliente Cadastrado</p>
                <?php endif;?>
        </div>
    </div>
@endsection
