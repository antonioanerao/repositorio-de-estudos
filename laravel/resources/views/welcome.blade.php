@extends('partials.layout')

@section('content')
    <div class="absolute top-0 w-full">
        @include('partials.header')
    </div>
    <div>
        <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
            <x-radial-blur class="left-[-20%] -top-24 w-[640px] h-[640px]" />
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="relative">
                    <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-6xl lg:text-7xl">Estudo Concurso<br class="hidden lg:inline"><span class="text-red-500">MPAC</span></h1>
                    <div class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <x-button.primary class="w-full sm:w-auto" href="/docs">
                            Material de estudo
                        </x-button.primary>
                        <x-button.secondary class="w-full sm:w-auto" href="https://github.com/antonioanerao/estudo-concurso-mpac/" target="_blank">
                            Código Fonte
                        </x-button.secondary>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
