@extends('layouts.main')
@section('titulo', 'Matrícula')
@section('subtitulo', 'Gestión de matrículas')

@section('contenido')
<div>
    <div class="mb-4">
        <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-medium">
            <i class="fas fa-plus bg-blue-600 text-white p-1 rounded-lg"></i> Nueva matrícula
        </a>
    </div>

    <!-- Indicadores de pasos -->
    <div class="flex justify-between mb-8 text-sm">
        <span id="tab-1" class="font-bold text-blue-600">1. Datos del alumno</span>
        <span id="tab-2" class="text-gray-400">2. Datos del apoderado</span>
        <span id="tab-3" class="text-gray-400">3. Documentos</span>
        <span id="tab-4" class="text-gray-400">4. Confirmación</span>
    </div>

    <form id="form-matricula" action="{{ route('matricula.store') }}" method="POST" class="bg-white p-6 rounded-xl shadow-sm">
        @csrf

        <!-- PASO 1: Datos del alumno -->
        <div id="paso-1" class="paso-formulario">
            <h2 class="text-lg font-semibold text-[#073366] mb-4">Datos del alumno</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nombres *</label>
                    <input type="text" name="nombres" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Apellidos *</label>
                    <input type="text" name="apellidos" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Fecha de nacimiento *</label>
                    <input type="date" name="fecha_nacimiento" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">DNI *</label>
                    <input type="text" name="dni" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Género *</label>
                    <select name="genero" class="w-full border rounded-lg p-2.5" required>
                        <option value="">Seleccionar</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Grado al que postula *</label>
                    <select name="grado" class="w-full border rounded-lg p-2.5" required>
                        <option value="">Seleccionar</option>
                        <option value="1">1° Primaria</option>
                        <option value="2">2° Primaria</option>
                        <option value="3">3° Primaria</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- PASO 2: Datos del apoderado -->
        <div id="paso-2" class="paso-formulario hidden">
            <h2 class="text-lg font-semibold text-[#073366] mb-4">Datos del apoderado</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nombres del apoderado *</label>
                    <input type="text" name="apoderado_nombres" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">DNI del apoderado *</label>
                    <input type="text" name="apoderado_dni" class="w-full border rounded-lg p-2.5" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Teléfono *</label>
                    <input type="text" name="apoderado_telefono" class="w-full border rounded-lg p-2.5" required>
                </div>
            </div>
        </div>

        <!-- PASO 3: Documentos -->
        <div id="paso-3" class="paso-formulario hidden">
            <h2 class="text-lg font-semibold text-[#073366] mb-4">Documentos</h2>
            <p class="text-gray-600 text-sm">Sube los documentos requeridos aquí.</p>
        </div>

        <!-- PASO 4: Confirmación -->
        <div id="paso-4" class="paso-formulario hidden">
            <h2 class="text-lg font-semibold text-[#073366] mb-4">Confirmación</h2>
            <p class="text-gray-600 text-sm">Revisa que todos los datos sean correctos antes de finalizar la matrícula.</p>
        </div>

        <!-- Botones inferiores -->
        <div class="flex justify-between mt-8 pt-4 border-t">
            <button type="button" id="btn-anterior" class="px-5 py-2 border rounded-lg text-gray-600">Cancelar</button>
            <button  type="button" id="btn-siguiente" class="px-6 py-2 bg-blue-600 text-white rounded-lg">Siguiente</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/matricula-wizard.js') }}"></script>
@endpush