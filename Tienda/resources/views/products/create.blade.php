@extends('layouts.main')
@section('contenido')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear producto
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input id="description" class="form-control" type="text" name="description">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input id="price" class="form-control" type="number" name="price">
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