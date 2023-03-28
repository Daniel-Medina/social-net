<div class="py-2 w-full px-2 sticky top-0">
    <div class="divide-y-2">
        <div>
            <!-- Notificaciones -->
            <a href="#" class="flex items-center px-4">
                <x-bell-svg/>
                <span class="text-gray-500 font-semibold text-2xl ml-2">Notificaciones</span>
            </a>

            <!--- Ultima notificacion -->
            <div class="color-2 p-2 mt-2 flex flex-col shadow shadow-purple-800 rounded-sm">
                <div class="flex">
                    <figure class="w-14">
                        <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-12 h-12 rounded-full object-cover object-center border-2" alt="">
                    </figure>
                    <div class="ml-2 w-full flex items-center border-b">
                        <p class="font-semibold text-gray-700">Daniel Medina</p>
                        <span class="text-gray-500 font-semibold ml-auto text-sm">28-mar</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit...
                </p>

                
            </div>

            <!-- Buscar --->
            <div class="mt-6">
                <h6 class="font-semibold text-gray-500 text-2xl mb-2 flex items-center px-4">
                    <x-magnifier-svg/>
                    <span class="ml-4">Buscar</span>
                </h6>
                <input type="text" class="w-full py-2" placeholder="ejem: Daniel Medina">
            </div>

            <!--- En linea ---->
            <div class="mt-4">
                <h6 class="font-semibold text-gray-500 text-2xl mb-2 flex items-center px-4">
                    <x-eye-svg/>
                    <span class="ml-4">En linea</span>
                </h6>
                <div class="color-2 rounded-sm w-full shadow shadow-purple-800">
                    <div class="px-2 py-4 divide-y">
                        <div class="flex items-center pb-2">
                            <figure class="mr-2">
                                <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-10 h-10 rounded-full object-cover object-center border-2" alt="">
                            </figure>
                            <p class="font-semibold text-gray-700">Daniel Medina</p>
                        </div>
                        <div class="flex items-center pt-2">
                            <figure class="mr-2">
                                <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-10 h-10 rounded-full object-cover object-center border-2" alt="">
                            </figure>
                            <p class="font-semibold text-gray-700">Daniel Medina</p>
                        </div>
                        <div class="flex items-center pt-2">
                            <figure class="mr-2">
                                <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-10 h-10 rounded-full object-cover object-center border-2" alt="">
                            </figure>
                            <p class="font-semibold text-gray-700">Daniel Medina</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>