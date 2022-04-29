@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gerenciador de Clientes</div>

                <div class="col">
                    <div class="col m-2">
                        <a href="clientes/criar" type="button" class="btn btn-success">Adicionar Cliente</a>
                    </div>
                    <div class="col m-2">
                        @if ($mensagem)
                            <div class="alert alert-success" role="alert">
                                {{$mensagem}}
                            </div>
                        @endif
                    </div>
                    <div class="row m-2">
                        @if (count($clientes) > 0)
                            @include('clientes.ListaDeClientes')
                        @else
                            <div class="alert alert-danger" role="alert">
                                Nenhum cliente cadastrado, clique no botão acima para cadastra um.
                            </div>
                        @endif                   
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
