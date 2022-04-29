<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\api\ClientesRequest;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(){
        return DB::table('clientes')->paginate(5);
    }

    public function store(ClientesRequest $request){

        $name = $request->name;
        $email = $request->email;

        $client = Cliente::create([
            'name' => $name,
            'email' => $email
        ]);

        return response()->json([
            'mensagem' => "O cliente {$client->name} foi criado com sucesso!",
            'cliente' => $client
        ]);
    }

    public function show(Request $request){

        $id = $request->id;

        if(!is_numeric($id)){
            return response()->json([
                'error' => "O id precisa ser um numero!",
            ], 422);
        }

        $client = Cliente::find($id);
         
        if(!$client){
            return response()->json([
                'error' => "O cliente {$id} não foi encontrado!",
            ], 400);
        }

        return $client;
    }

    public function update(Request $request){
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;

        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json([
                'error' => "O cliente {$id} não foi encontrado!",
            ], 400);
        }

        if(is_null($name)){
            $name = $cliente->name;
        }
        if(is_null($email)){
            $email = $cliente->email;
        }

        $cliente->update([
            'name' => $name,
            'email' => $email
        ]);
        
        return response()->json([
            'mensagem' => "O cliente {$cliente->name} foi atualizado com sucesso!",
            'cliente' => $cliente
        ]);
    }

    public function destroy(Request $request) {
        $id = $request->id;

        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json([
                'error' => "O cliente {$id} não foi encontrado!",
                ], 400);
        }

        $cliente->delete();

        return response()->json([
            'mensagem' => "O cliente {$cliente->name} foi removido com sucesso!",
            'cliente' => $cliente
        ]);
    }
}
