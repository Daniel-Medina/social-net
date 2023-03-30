<x-app-layout>

    <div class="">
        <div class="relative">
            <img src="{{ Storage::url('histories/img8.png') }}" class="w-full h-56 object-cover object-center" alt="">
            <div class="absolute -bottom-16 left-4">
                <img src="{{ Storage::url('profiles/profile1.jpg') }}" class="w-36 h-36 object-cover object-center rounded-full" alt="">
            </div>
            <button class="color-1 text-white float-right mt-4 rounded-lg px-4 py-2 mr-4">Seguir</button>
        </div>

        <!--- Detalles de perfil --->
        <div class="mt-16 py-2 px-4">
            <h1 class="font-bold text-gray-900 text-2xl">Daniel Medina</h1>
            <h4 class="font-sans text-gray-500 px-4">@DanielMedina</h4>

            <p class="px-4 font-sans text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus perferendis minus provident repellat eius obcaecati quasi atque ullam saepe illo impedit ut, autem fugiat nobis assumenda incidunt maiores fuga? Sed?
            </p>

        </div>
    </div>

</x-app-layout>