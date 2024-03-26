@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Products Edit</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nombre del producto...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="Stock">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
