@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="col">
                    <div class="col m-2 p-2">
                        <h3 class="row justify-content-center">DOCUMENTAÇÃO E POLÍTICAS</h3>

                        <div class="row m-3 justify-content-center">
                                Sugerimos ler nossa documentação antes de trabalhar com a nossa API.
                            Espera-se que cada proprietário do projeto cumpra a documentação e as políticas. O não
                            cumprimento da documentação ou das políticas pode levar à revogação do acesso à API.
                        </div>
                    </div>
                    <div class="col m-2 p-2">
                        <h3 class="row justify-content-center">CHAVE DE API DE DESENVOLVIMENTO</h3>

                        <div class="row m-3 justify-content-center">
                            Essa chave de API deve ser usada apenas para desenvolvimento. Por favor, registre quaisquer produtos permanentes.
                            NÃO use esta chave de API em um produto disponível publicamente!
                                <div class="row m-3 justify-content-center">
                                    <input class="m-3" id="tokenInput" style="text-align:center" type="password" value='{{ Auth::user()->createToken('authToken')->plainTextToken }}'>
                                    <button type="button" id="btnToken" onclick="mostrarSenha()" class="btn btn-danger">Mostrar</button>
                                    <button type="button" id="btnCopiar" onclick="CopiarToken()" class="btn bg-secondary m-2">Copiar</button>
                                </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

            </div>
        </div>
    </div>
</div>
<script>
    function mostrarSenha() {
        let tokenInput = document.getElementById('tokenInput');
        let btnToken = document.getElementById('btnToken');

        if(tokenInput.type == 'password'){
            tokenInput.type = 'text'
            btnToken.innerHTML = "Esconder"
        } else {
            tokenInput.type = 'password'
            btnToken.innerHTML = "Mostrar"
        }        
    }

    function CopiarToken() {

        let tokenInput = document.getElementById('tokenInput');

        tokenInput.type = 'text'
        tokenInput.select();
        document.execCommand('copy');
        tokenInput.type = 'password'
    }
</script>
@endsection
