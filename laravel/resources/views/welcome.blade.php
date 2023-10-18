@extends('partials.layout')

@section('content')
    <div class="absolute top-0 w-full">
        @include('partials.header')
    </div>
    <div>
        <section class="relative overflow-hidden pt-48 pb-20 h-screen lg:pt-48 xl:pt-56 xl:pb-28">
            <x-radial-blur class="left-[-20%] -top-24 w-[640px] h-screen" />
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="relative">
                    <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-5xl lg:text-6xl dark:text-white">
                        {{ config('app.name') }}
                    </h1>
                    <div class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <x-button.primary class="w-full sm:w-auto" href="/docs">
                            Material de estudo
                        </x-button.primary>
                        <x-button.secondary class="w-full sm:w-auto" href="https://github.com/antonioanerao/repositorio-de-estudos/" target="_blank">
                            Código Fonte
                        </x-button.secondary>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
