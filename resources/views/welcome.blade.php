@extends('layouts.main')
@section('titulo', 'Inicio')
@section('subtitulo', 'Bienvenido al sistema de matrícula')

@section('contenido')
    <!-- FILA 1: Las 4 tarjetas superiores -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <!-- Matriculas en proceso -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                <i data-lucide="clipboard-list" class="w-6 h-6"></i>
            </div>
            <p class="text-sm text-slate-500">Matrículas en proceso</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">48</h3>
        </div>

        <!-- Matrículas completas -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4">
                <i data-lucide="check-circle" class="w-6 h-6"></i>
            </div>
            <p class="text-sm text-slate-500">Matrículas completas</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">120</h3>
        </div>

        <!-- Pendientes de pago -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <div class="w-10 h-10 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center mb-4">
                <i data-lucide="clock" class="w-6 h-6"></i>
            </div>
            <p class="text-sm text-slate-500">Pendientes de pago</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">32</h3>
        </div>

        <!-- Total de estudiantes -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <p class="text-sm text-slate-500">Total de estudiantes</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">168</h3>
        </div>

    </div>

    <!-- FILA 2: Sección inferior dividida en 2 columnas -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- MITAD IZQUIERDA: Accesos rápidos -->
        <div>
            <h3 class="text-lg font-semibold text-slate-800 mb-4">Accesos rápidos</h3>
            <div class="grid grid-cols-2 gap-4">
                
                <a href="/matricula" class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition flex flex-col items-center justify-center text-center">
                    <i data-lucide="user-plus" class="w-8 h-8 text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-slate-700">Registrar matrícula</span>
                </a>

                <a href="/estudiantes" class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition flex flex-col items-center justify-center text-center">
                    <i data-lucide="users" class="w-8 h-8 text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-slate-700">Lista de estudiantes</span>
                </a>

                <a href="/pagos" class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition flex flex-col items-center justify-center text-center">
                    <i data-lucide="credit-card" class="w-8 h-8 text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-slate-700">Pagos y comprobantes</span>
                </a>

                <a href="/reportes" class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition flex flex-col items-center justify-center text-center">
                    <i data-lucide="file-bar-chart" class="w-8 h-8 text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-slate-700">Reportes</span>
                </a>

            </div>
        </div>

        <!-- MITAD DERECHA: Últimas matrículas -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-semibold text-slate-800 mb-4">Últimas matrículas</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 text-xs text-slate-400 uppercase">
                            <th class="pb-3 font-medium">Alumno</th>
                            <th class="pb-3 font-medium">Grado</th>
                            <th class="pb-3 font-medium text-right">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                        <tr>
                            <td class="py-3 font-medium text-slate-800">Sofía Torres García</td>
                            <td class="py-3">1° Secundaria</td>
                            <td class="py-3 text-right">12/05/2025</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-medium text-slate-800">Mateo Rojas Díaz</td>
                            <td class="py-3">2° Primaria</td>
                            <td class="py-3 text-right">11/05/2025</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-medium text-slate-800">Valentina Castillo Pérez</td>
                            <td class="py-3">1° Primaria</td>
                            <td class="py-3 text-right">10/05/2025</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-medium text-slate-800">Diego Fernández Ruiz</td>
                            <td class="py-3">3° Secundaria</td>
                            <td class="py-3 text-right">09/05/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 text-right">
                <a href="/matriculas" class="text-sm font-medium text-blue-600 hover:text-blue-800">Ver todas →</a>
            </div>
        </div>

    </div>
@endsection