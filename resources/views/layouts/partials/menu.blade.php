  <nav class="p-4 space-y-1.5 mt-2">
      <a href="{{ route('inicio') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('dashboard') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fas fa-home w-5 text-center"></i>
          <span>Inicio</span>
      </a>
      <a href="{{ route('matricula.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('matriculas.*') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fas fa-file-alt w-5 text-center"></i>
          <span>Matrículas</span>
      </a>
      </a>
      <a href="{{route('estudiante.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('estudiantes.*') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fas fa-user w-5 text-center"></i>
          <span>Estudiantes</span>
      </a>
      <a href="{{route('pagos.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('pagos.*') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fas fa-credit-card w-5 text-center"></i>
          <span>Pagos</span>
      </a>
      <a href="{{route('reportes.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('reportes.*') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fa-solid fa-file w-5 text-center"></i>
          <span>Reportes</span>
      </a>
      <a href="{{route('configuracion.index')}}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('configuracion.*') ? 'bg-[#1D63B8] text-white font-medium shadow-sm' : 'text-blue-100 hover:bg-blue-900/60' }}">
          <i class="fas fa-cog w-5 text-center"></i>
          <span>Configuración</span>
      </a>
  </nav>