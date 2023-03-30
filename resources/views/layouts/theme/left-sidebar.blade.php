<!-- Header -->
<div class="px-6 py-2 w-full">
    <div class="divide-y-2">
        <!-- Logo y nombre / Aun en proceso --->
        <nav class="pb-2">
            <a href="/" class="flex justify-start items-center">
                <img src="{{ asset('logo.png') }}" class="w-14 h-14 object-cover object-center rounded-full" alt="">
                <span class="font-bold text-gray-600 ml-2">SOCIALNET</span>
            </a>
        </nav>

        <!-- Perfil activo -->
        <div class="pt-2 flex justify-start items-top w-full">
            <figure class="mr-2 w-20">
                <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-16 h-16 object-cover object-center rounded-sm shadow-md shadow-purple-800" alt="">
            </figure>

            <div class="flex flex-col w-full">
                <p class="font-bold text-xl text-gray-700">Daniel Medina</p>
                <hr class="w-full h-0.5 color-1">
                <span class="text-sm font-bold text-gray-800 relative flex items-center mt-4"> 
                    <span class="bg-green-400 h-2 w-2 rounded-full absolute left-0"></span> 
                    <span class="absolute left-4">En linea</span>
                </span>
            </div>
        </div>

        <!-- Accesos directos --->
        <div class="mt-4 pt-4">
            <nav>
                <a href="#" class="flex items-center mb-4 border-b-2 bg-purple-600 bg-opacity-20 rounded-sm p-1">
                    <x-home-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Inicio</span>
                </a>
                <a href="#" class="flex items-center mb-6">
                    <x-heart-lined-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Amigos</span>
                </a>
                <a href="#" class="flex items-center mb-6">
                    <x-layer-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Comunidades</span>
                </a>
                <a href="#" class="flex items-center mb-6">
                    <x-compass-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Descubrir</span>
                </a>
                <a href="#" class="flex items-center mb-6">
                    <x-media-random-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Sorprendeme</span>
                </a>
                <a href="#" class="flex items-center mb-6">
                    <x-gear-svg class=""/>
                    <span class="ml-2 text-gray-500 font-semibold text-2xl">Configuración</span>
                </a>
            </nav>
        </div>

    </div>

    
</div>