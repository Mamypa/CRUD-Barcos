<!DOCTYPE html>
<html>
<head>
    <title>Editar Barco</title>
</head>
<body>
    <h1>Editar Barco</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barcos.update', $barco->id) }}" method="POST">
        @csrf
        @method('PUT')

        Nome: <input type="text" name="nome" value="{{ old('nome', $barco->nome) }}"><br><br>
        Tipo: <input type="text" name="tipo" value="{{ old('tipo', $barco->tipo) }}"><br><br>
        Capacidade: <input type="number" name="capacidade" value="{{ old('capacidade', $barco->capacidade) }}"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('barcos.index') }}">Voltar para a lista</a>
</body>
</html>
