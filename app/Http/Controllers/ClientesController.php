<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClientesRequest;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $clientes = Cliente::paginate(10);

        $mensagem = $request->session()->get('mensagem');
        return view('clientes.index', [
            'clientes' => $clientes,
            'mensagem' => $mensagem,
        ]);
    }

    public function create(){
        return view('clientes.criar');
    }

    public function store(ClientesRequest $request){
        $name = $request->name;
        $email = $request->email;

        $cliente = Cliente::create([
            'name' => $name,
            'email' => $email
        ]);

        $request->session()->flash('mensagem', "O cliente {$cliente->name} foi criado com sucesso!");

        return redirect('clientes');
    }

    public function destroy(Request $request){
        $id = $request->id;

        if(!is_numeric($id)){
            $request->session()->flash('mensagem', "O id precisa ser um numero!");
            return redirect('clientes');
        }
        
        Cliente::destroy($id);

        $request->session()->flash('mensagem', "O cliente foi removido com sucesso!");

        return redirect('clientes');
    }

    public function edit(Request $request){
        $id = $request->id;

        if(!is_numeric($id)){
            $request->session()->flash('mensagem', "O id precisa ser um numero!");
            return redirect('clientes');
        }

        $cliente = Cliente::find($id);
        return view('clientes.editar', [
            'cliente' => $cliente
        ]);
    }

    public function update(Request $request){
        $id = $request->id;

        if(!is_numeric($id)){
            return response()->json([
                'error' => "O id precisa ser um numero!",
            ], 422);
        }

        $name = $request->name;
        $email = $request->email;

        $cliente = Cliente::find($id);

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
        
        $request->session()->flash('mensagem', "O cliente {$cliente->name} foi atualizado com sucesso!");

        return redirect('clientes');
    }
}
