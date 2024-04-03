<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funcionario;
class ApiController extends Controller
{
    public function getAll()
    {
        $funcionarios = Funcionario::Paginate(10);
        return $funcionarios;
    }
    public function getOne(string $id)
    {
        $funcionario = Funcionario::findorFail($id);
        return $funcionario;
    }
    public function createRecord( Request $request)
    {
        $novoFuncionario = new Funcionario();
        $novoFuncionario->save($request->all());
        $Funcionario = Funcionario::orderBy('criado_em', 'DESC')->get();
        return [
            'mensagem' => 'Criado com sucesso',
            'dado_recem_criado' =>$Funcionario,
        ];
    }
    public function deleteRecord(string $id)
    {
        $funcionarioParaDeletar = Funcionario::find($id);
        $funcionarioParaDeletar->delete();
    }
    public function updateRecord(Request $request, string $id)
    {
        $funcionarioParaAtualizar = Funcionario::find($id);
        if(empty($funcionarioParaAtualizar))
        {
            $this->createRecord($request);
        }
        $funcionarioParaAtualizar->update($request->all());
        $funcionarioAtualizado = $this->getOne($id);
        return [
            'mensagem' => 'Funcionario atualizado com sucesso',
            'funcionario' => $funcionarioAtualizado
        ];
    }

}
