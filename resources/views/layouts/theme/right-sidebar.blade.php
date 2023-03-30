<div class="py-2 w-full px-2 sticky top-0">
    <div class="divide-y-2">
        <div>

            <!-- Buscar --->
            <div class="mt-2">
                <h6 class="font-semibold text-gray-500 text-2xl mb-2 flex items-center px-4">
                    <x-magnifier-svg/>
                    <span class="ml-4">Buscar</span>
                </h6>
                <input type="text" class="w-full py-2" placeholder="ejem: Daniel Medina">
            </div>

            <!-- Notificaciones -->
            <a href="#" class="flex items-center px-4 mt-6">
                <x-bell-svg/>
                <span class="text-gray-500 font-semibold text-2xl ml-2">Notificaciones</span>
            </a>

            <!--- Ultima notificacion -->
            <div class="color-2 p-2 mt-4 flex flex-col shadow shadow-purple-800 rounded-sm">
                <div class="flex">
                    <figure class="w-10">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-8 h-8 rounded-full object-cover object-center border-2" alt="">
                    </figure>
                    <div class="ml-2 w-full flex items-center border-b">
                        <p class="font-semibold text-gray-700">Daniel Medina</p>
                        <span class="text-gray-500 font-semibold ml-auto text-sm">28-mar</span>
                    </div>
                </div>
                <p class="font-sans text-gray-900 text-justify text-sm px-4 py-1">
                    Lorem ipsum dolor sit amet consectetur...
                </p>
            </div>

            <!--- En linea ---->
            <div class="mt-6 color-2 rounded shadow shadow-purple-700 divide-y">
                <div class="bg-white py-2 px-4 flex items-center">
                    <x-eye-svg/>
                    <h6 class="font-bold text-gray-500 text-xl ml-4">Amigos</h6>
                </div>
                <div class="divide-y py-2 px-4">
                    <div class="flex items-center py-1">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-6 h-6 object-center object-cover rounded-circle" alt="">
                        <p class="font-semibold text-gray-700 text-sm ml-2">@DanielMedina</p>
                        <span class="ml-auto mr-2 flex items-center">
                            <span class="text-xs font-sans text-gray-500 mr-2">(activo)</span>
                            <span class="bg-green-600 rounded-full h-2 w-2"></span>
                        </span>
                    </div>
                    <div class="flex items-center py-1">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-6 h-6 object-center object-cover rounded-circle" alt="">
                        <p class="font-semibold text-gray-700 text-sm ml-2">@DanielMedina</p>
                        <span class="ml-auto mr-2 flex items-center">
                            <span class="text-xs font-sans text-gray-500 mr-2">(activo)</span>
                            <span class="bg-red-600 rounded-full h-2 w-2"></span>
                        </span>
                    </div>
                    <div class="flex items-center py-1">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-6 h-6 object-center object-cover rounded-circle" alt="">
                        <p class="font-semibold text-gray-700 text-sm ml-2">@DanielMedina</p>
                        <span class="ml-auto mr-2 flex items-center">
                            <span class="text-xs font-sans text-gray-500 mr-2">(hace 2 minutos)</span>
                            <span class="bg-green-600 rounded-full h-2 w-2"></span>
                        </span>
                    </div>
                    <div class="flex items-center py-1">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-6 h-6 object-center object-cover rounded-circle" alt="">
                        <p class="font-semibold text-gray-700 text-sm ml-2">@DanielMedina</p>
                        <span class="ml-auto mr-2 flex items-center">
                            <span class="text-xs font-sans text-gray-500 mr-2">(ausente)</span>
                            <span class="bg-yellow-600 rounded-full h-2 w-2"></span>
                        </span>
                    </div>
                    <div class="flex items-center py-1">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-6 h-6 object-center object-cover rounded-circle" alt="">
                        <p class="font-semibold text-gray-700 text-sm ml-2">@DanielMedina</p>
                        <span class="ml-auto mr-2 flex items-center">
                            <span class="text-xs font-sans text-gray-500 mr-2">(hace 5 horas)</span>
                            <span class="bg-red-600 rounded-full h-2 w-2"></span>
                        </span>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>