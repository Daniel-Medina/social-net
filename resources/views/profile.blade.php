@php
    $i = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
    $count = 0;
@endphp


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

        <!---- Menu de navegacion del perfil ----> 
        <div>
            <hr class="py-0.5 bg-purple-800 opacity-20">
        </div>

        <!--- Lista de publicacies --->
        <div class="divide-y">
            @foreach ($i as $key => $a)
                <div class="p-4 flex flex-row">
                    <img src="{{ Storage::url('profiles/profile1.jpg') }}"
                        class="w-14 h-14 object-cover object-center rounded-full" alt="">
                    <div class="flex flex-col w-full ml-2">
                        <div class="flex w-full">
                            <h6 class="text-gray-800 font-bold">Daniel Medina</h6>
                            <p class="ml-auto text-sm text-gray-700">hace 1 hora</p>
                        </div>
    
                        <div class="text-gray-700 text-justify font-sans">
                            <p class="pr-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <br>
                                Est, consectetur accusamus asperiores explicabo neque quos. Laudantium molestiae quam quae
                                voluptatum? Eos ad quos quasi rem nihil alias recusandae ducimus possimus.
    
                                <br><br>
                            </p>
                            <img src="{{ Storage::url('histories/img' . $count . '.png') }}"
                                class="w-full rounded max-h-96 object-cover object-center" alt="">
    
                            @php
                                $count = $count == 9 ? 0 : $count + 1;
                            @endphp
                        </div>
    
                        <div class="flex justify-around mt-4">
                            <span class="flex items-center">
                                <x-like-svg />
                                <span class="text-gray-400 text-sm font-sans ml-2">236</span>
                            </span>
                            <span class="flex items-center">
                                <x-comment-thin-svg />
                                <span class="text-gray-400 text-sm font-sans ml-2">4673</span>
                            </span>
                            <span class="flex items-center">
                                <x-share-svg />
                                <span class="text-gray-400 text-sm font-sans ml-2">236</span>
                            </span>
                            <span class="flex items-center">
                                <x-eye-svg />
                                <span class="text-gray-400 text-sm font-sans ml-2">12236</span>
                            </span>
                            <span class="flex items-center">
                                <x-bookmark-hold-svg />
                                <span class="text-gray-400 text-sm font-sans ml-2">456</span>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>