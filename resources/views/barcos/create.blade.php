<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Barco</title>
</head>
<body>
    <h1>Cadastrar Novo Barco</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barcos.store') }}" method="POST">
        @csrf
        Nome: <input type="text" name="nome" value="{{ old('nome') }}"><br><br>
        Tipo: <input type="text" name="tipo" value="{{ old('tipo') }}"><br><br>
        Capacidade: <input type="number" name="capacidade" value="{{ old('capacidade') }}"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('barcos.index') }}">Voltar para a lista</a>
</body>
</html>
