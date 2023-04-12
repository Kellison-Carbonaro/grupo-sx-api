<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    // private $empresa;
    // public function __Construct(EmpresaController $empresa){
    //     $this->empresa = $empresa;
    // }
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $empresa = Empresa::all();
        return response()->json(['empresas'=>$empresa]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $dados = $request->except('_token');
        try{
            $valida = sizeof($dados);
            if($valida >= 5){
                $empresa = response()->json([
                    'result' => Empresa::create($dados)
                ]);
                return response()->json(['success'=>'Empresa cadastrado com sucesso', 'empresa' => $empresa->original]);
            }else{
                return response()->json(['error'=>'Erro ao cadastrar empresa, esta faltando campo'], 400);
            }

        } catch(e){
            return response()->json(['error'=>'Erro ao cadastrar empresa'], 400);
        }
        return response()->json(['error'=>'Erro ao cadastrar empresa'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return response()->json($empresa);
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
