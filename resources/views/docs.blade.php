@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Documentaçãp da API</div>

                <div class="col">
                    <div class="col m-2 p-2">
                        <h3 class="row justify-content-center">DOCUMENTAÇÃO</h3>

                        <div class="row m-3 justify-content-center">
                        <h4>Visão geral</h4>
                            Este conjunto de documentação ajudará você a entender melhor como usar as APIs e os recursos do desenvolvedor.
                            Ele foi projetado para ajudá-lo a começar a desenvolver suas próprias ferramentas e produtos.
                        </div>

                        <div class="row m-3 justify-content-center">
                            <h4>Começando</h4>

                            <h5 class="m-1">Usuários</h5>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-success text-white">POST</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/login</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Obter chave de API</div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-primary text-white">POST</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/register</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Definir usuário</div>
                            </div>

                            <h5 class="m-1">Clientes</h5>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-success text-white">GET</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/clientes</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Obter clientes</div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-primary text-white">POST</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/clientes</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Definir cliente</div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-success text-white">GET</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/clientes/{id}</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Mostrar cliente</div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-warning text-white">PUT</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/clientes/{id}</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Atualizar cliente</div>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-2 justify-content-center bg-danger text-white">DELETE</div>
                                <div class="col-sm-7 justify-content-center bg-dark text-white">/clientes/{id}</div>
                                <div class="col-sm-3 justify-content-center bg-warning text-dark">Remover cliente</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
