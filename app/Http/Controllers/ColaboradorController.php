<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colaboradores;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colaboradores = DB::table('colaboradores')
        ->leftJoin('empresas', 'colaboradores.empresa_id', '=', 'empresas.id')
        ->select('colaboradores.id', 'colaboradores.cpf', 'colaboradores.nome', 'colaboradores.email', 'colaboradores.telefone',
            'colaboradores.endereco', 'colaboradores.empresa_id', 'empresas.nome as nome_empresa')
        ->get();
        return response()->json(['colaboradores'=>$colaboradores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        try{
            $valida = sizeof($dados);
            if($valida >= 6){
                $colaborador = response()->json([
                    'result' => Colaboradores::create($dados)
                ]);
                return response()->json(['success'=>'Colaborador cadastrado com sucesso', 'colaborador' => $colaborador->original]);
            }else{
                return response()->json(['error'=>'Erro ao cadastrar colaborador, esta faltando campo'], 400);
            }

        } catch(e){
            return response()->json(['error'=>'Erro ao cadastrar colaborador'], 400);
        }
        return response()->json(['error'=>'Erro ao cadastrar colaborador'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
