<!DOCTYPE html>
<html>
<head>
    <title>Lista de Barcos</title>
</head>
<body>
    <h1>Lista de Barcos</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('barcos.create') }}">Cadastrar Novo Barco</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barcos as $barco)
                <tr>
                    <td>{{ $barco->id }}</td>
                    <td>{{ $barco->nome }}</td>
                    <td>{{ $barco->tipo }}</td>
                    <td>{{ $barco->capacidade }}</td>
                    <td>
                        <a href="{{ route('barcos.edit', $barco->id) }}">Editar</a> |
                        <form action="{{ route('barcos.destroy', $barco->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este barco?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
