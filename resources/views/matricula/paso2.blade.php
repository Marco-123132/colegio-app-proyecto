@extends('layouts.main') 
5 t    5 
@section('content')
<div class="container-fluid px-4">
    <h2 class="fw-bold mb-0">Matrícula</h2>
    <p class="text-muted">Gestión de matrículas</p>

    <div class="mb-3">
        <span class="text-primary fw-bold"><i class="fas fa-plus-circle"></i> Nueva matrícula</span>
    </div>

    {{-- Indicador de pasos --}}
    <div class="d-flex justify-content-between mb-4 text-muted">
        <span>1. Datos del alumno</span>
        <span class="text-primary fw-bold">2. Datos del apoderado</span>
        <span>3. Documentos</span>
        <span>4. Confirmación</span>
    </div>

    {{-- Tarjeta del formulario --}}
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4">
            <h5 class="text-primary mb-4">Datos del apoderado</h5>

            <form action="{{ route('matricula.guardarPaso2') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombres *</label>
                        <input type="text" name="nombres" class="form-control" 
                               value="{{ old('nombres', session('matricula.apoderado.nombres')) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Apellidos *</label>
                        <input type="text" name="apellidos" class="form-control" 
                               value="{{ old('apellidos', session('matricula.apoderado.apellidos')) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">DNI *</label>
                        <input type="text" name="dni" maxlength="8" class="form-control" 
                               value="{{ old('dni', session('matricula.apoderado.dni')) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Teléfono / Celular *</label>
                        <input type="text" name="telefono" class="form-control" 
                               value="{{ old('telefono', session('matricula.apoderado.telefono')) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Parentesco *</label>
                        <select name="parentesco" class="form-select" required>
                            <option value="">Seleccionar</option>
                            <option value="Padre" {{ old('parentesco', session('matricula.apoderado.parentesco')) == 'Padre' ? 'selected' : '' }}>Padre</option>
                            <option value="Madre" {{ old('parentesco', session('matricula.apoderado.parentesco')) == 'Madre' ? 'selected' : '' }}>Madre</option>
                            <option value="Tutor" {{ old('parentesco', session('matricula.apoderado.parentesco')) == 'Tutor' ? 'selected' : '' }}>Tutor legal</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Dirección *</label>
                        <input type="text" name="direccion" class="form-control" 
                               value="{{ old('direccion', session('matricula.apoderado.direccion')) }}" required>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between">
                    <a href="{{ route('matricula.paso1') }}" class="btn btn-outline-secondary px-4">Anterior</a>
                    <button type="submit" class="btn btn-primary px-4">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection