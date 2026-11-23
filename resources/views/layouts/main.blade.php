<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased">
    <div class="flex min-h-screen">
        <!-- SIDEBAR -->
        <aside class="w-64 bg-[#0B3568] text-white flex flex-col justify-between shrink-0">
            <div>
                <div class="p-6 flex items-center gap-3 border-b border-blue-900/50">
                    <div class="w-10 h-10 rounded-lg border-2 border-white flex items-center justify-center shrink-0">
                        <img src="/images/logo.jpg " alt="">
                    </div>
                    <div class="leading-tight">
                        <span class="block font-bold text-base">Colegio</span>
                        <span class="block font-semibold text-sm text-blue-100">Virgen Asunta</span>
                    </div>
                </div>
                <div>
                    @include('layouts.partials.menu')
                </div>
            </div>

            <!-- usuario -->
            <div class="p-4 border-t border-blue-900/50">
                <div class="flex items-center gap-3 px-2 py-2">
                    <div class="w-9 h-9 rounded-full bg-white text-[#0B3568] flex items-center justify-center font-bold">
                        <i data-lucide="user" class="w-5 h-5"></i>
                    </div>  
                    <div >
                        <span class="text-white mt-6">Marco Vigo</span>
                        <span class="block text-blue-100 text-sm">Administrador</span>
                    </div>      
                </div>
            </div>
        </aside>

        <!-- CONTENIDO -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white border-b border-slate-100 px-8 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">@yield('titulo')</h1>
                    <p class="text-sm text-slate-500">@yield('subtitulo')</p>
                </div>
                <div class="flex items-center gap-2 cursor-pointer">
                    <i data-lucide="bell"></i>  
                    <span class>Marco Vigo</span>
                </div>
            </header>
            <div class="flex-1 p-8">
                @yield('contenido')
            </div>
        </div>
    </div>
   <!-- 1. Esto va antes de cerrar </head> -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- 2. Esto va antes de cerrar </body> -->
<script>
    lucide.createIcons();
</script>
</script>
</script>
</body>
</html>
</body>
</html>