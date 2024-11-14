@extends('layouts.layout')

@section('title', 'Creación de producto')

@section('content')
    <div class="row text-center">
        <h1>Registrar producto</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="POST" action="{{route('producto.store') }}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
