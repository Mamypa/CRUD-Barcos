<?php

namespace App\Http\Controllers;

use App\Models\Barco;
use Illuminate\Http\Request;

class BarcoController extends Controller
{
    /**
     * Exibir a lista de barcos.
     */
    public function index()
    {
        $barcos = Barco::all();
        return view('barcos.index', compact('barcos'));
    }

    /**
     * Mostrar o formulário para criar um novo barco.
     */
    public function create()
    {
        return view('barcos.create');
    }

    /**
     * Salvar um novo barco no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'capacidade' => 'required|integer|min:1',
        ]);

        Barco::create($request->all());

        return redirect()->route('barcos.index')->with('success', 'Barco cadastrado com sucesso!');
    }

    /**
     * Mostrar o formulário para editar um barco existente.
     */
    public function edit(Barco $barco)
    {
        return view('barcos.edit', compact('barco'));
    }

    /**
     * Atualizar os dados de um barco no banco de dados.
     */
    public function update(Request $request, Barco $barco)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'capacidade' => 'required|integer|min:1',
        ]);

        $barco->update($request->all());

        return redirect()->route('barcos.index')->with('success', 'Barco atualizado com sucesso!');
    }

    /**
     * Excluir um barco do banco de dados.
     */
    public function destroy(Barco $barco)
    {
        $barco->delete();

        return redirect()->route('barcos.index')->with('success', 'Barco excluído com sucesso!');
    }
}
