<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wishlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>
                        <img style="height: 200px;width:300px;padding:10px;margin-bottom: 21px;"  src="ps5.jpeg"{{-- {{ $post->naam }} --}} align="left">
                        <h1 style="margin-left: 10px;font-size:2rem;"> {{-- titel uit database --}}Earth</h1>
                        <p style="padding: 10px;"> {{-- beschrijving uit database --}} De Aarde is vanaf de Zon gerekend de derde planeet van het zonnestelsel. Hierin behoort ze tot de naar haar genoemde
                            "aardse planeten", waarvan ze zowel qua massa als qua volume de grootste is.</p>
                        <a style="" href="https://nl.wikipedia.org/wiki/Aarde_(planeet) {{-- link uit database --}} "> {{-- prijs uit database --}}599.999.999.999.999</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
