@extends('layouts.main')
@section('contenido')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar producto
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input value="{{ $product->description }}" id="description" class="form-control" type="text" name="description">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input value="{{ $product->price }}" id="price" class="form-control" type="number" name="price">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection