@extends('layouts.main')
@section('titulo', 'Estudiantes')
@section('subtitulo', 'Bienvenidos a listado de Estudiantes')
@section('contenido')

<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-100 text-xs font-semibold text-slate-500 uppercase">
                <th class="p-4">DNI</th>
                <th class="p-4">Nombre Completo</th>
                <th class="p-4">Apoderado</th>
                <th class="p-4">Teléfono</th>
                <th class="p-4">Último Grado</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-sm">
        </tbody>
    </table>
</div>

@endsection