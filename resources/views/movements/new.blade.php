@extends('layouts.app')

@section('content')
    <form action="" method="post">
        <div class="mb-3">
            <label for="select-movement" class="form-label">Tipo de movimiento</label>
            <select class="form-select" aria-label="Default select example" required id="select-movement">
                <option selected>Tipo de movimiento</option>
                <option value="1">Entrada</option>
                <option value="2">Salida</option>
                <option value="3">Devolucion</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="select-branch" class="form-label">Sucursal</label>
            <select class="form-select" aria-label="Default select example" required id="select-branch">
                <option selected>Seleccionar sucursal</option>
                <option value="1">Entrada</option>
                <option value="2">Salida</option>
                <option value="3">Devolucion</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="social-reason" class="form-label">Razon social</label>
            <input type="text" class="form-control" id="social-reason" placeholder="Nombre del responsable">
        </div>

        <div class="mb-3">
            <label for="product-select" class="form-label">Producto</label>
            <select class="form-select" aria-label="Default select example" id="product-select">
                <option selected>Seleccionar producto</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="amount" placeholder="Cantidad">
        </div>

    </form>
@endsection
