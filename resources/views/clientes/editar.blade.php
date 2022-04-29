@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar um Cliente</div>

                <div class="col">
                    <div class="col m-2">
                        <form method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <input type="name" class="form-control" id="name" placeholder="Nome" name="name" value="{{$cliente->name}}">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{$cliente->email}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
                            <a href="{{ route('clientes.index') }}" type="button" class="btn btn-success">Voltar</a>
                        </form>
                    </div>
                    <div class="col m-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection