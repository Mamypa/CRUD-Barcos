@extends('layout')

@section('title', 'Lista de Barcos')

@section('content')
    <h1 class="mb-4">Lista de Barcos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barcos.create') }}" class="btn btn-success mb-3">➕ Cadastrar Novo Barco</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barcos as $barco)
                <tr>
                    <td>{{ $barco->id }}</td>
                    <td>{{ $barco->nome }}</td>
                    <td>{{ $barco->tipo }}</td>
                    <td>{{ $barco->capacidade }}</td>
                    <td>
                        <a href="{{ route('barcos.edit', $barco->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('barcos.destroy', $barco->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum barco cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
