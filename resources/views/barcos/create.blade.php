@extends('layout')

@section('title', 'Cadastrar Barco')

@section('content')
    <h1 class="mb-4">Cadastrar Novo Barco</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barcos.store') }}" method="POST" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label for="nome" class="form-label">Nome do Barco</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}">
        </div>

        <div class="col-md-6">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ old('tipo') }}">
        </div>

        <div class="col-md-4">
            <label for="capacidade" class="form-label">Capacidade</label>
            <input type="number" name="capacidade" id="capacidade" class="form-control" value="{{ old('capacidade') }}">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('barcos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
@endsection
