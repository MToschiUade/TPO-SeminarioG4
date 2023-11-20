<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'dashcode') }}</title>
        <x-favicon/>
        {{-- Scripts --}}
        @vite(['resources/css/app.scss', 'resources/js/custom/store.js'])
    </head>
    <body  style="background-image: url('{{@asset('images/fondo.jpeg')}}')">

        <div class="loginwrapper">
            <div class="lg-inner-column">
                <div class="left-column relative z-[1]" style="background-image: url('{{@asset('images/fondo.jpeg')}}')">
                    <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                        <!-- APPLICATION LOGO -->
                        <div class="mb-6">
                            <x-application-logo />
                        </div>
                        <h1 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                            <span class="text-slate-800 dark:text-slate-400 font-bold text-white">SAT.IA</span>
                        </h1>
                        <h3 style="text-shadow: -0.7px 0 white, 0 0.7px white, 0.7px 0 white, 0 -0.7px white;">
                            Sistema de Alerta Temprana de Incendios en Argentina
                        </h3>
                    </div>
                    <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
{{--                        <img class="h-full w-full object-containll" src="{{ getSettings('guest_background') }}" alt="image">--}}
{{--                        <img class="h-full w-full object-containll" src="{{ @asset('images/svg/Icono-Fortigate.svg') }}" alt="image">--}}
                    </div>
                </div>
                <div class="right-column  relative">
                    <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                        {{ $slot }}
                        <div class="auth-footer text-center">
                            {{ __('Copyright') }}
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            ,
                            {{ __('All Rights Reserved.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @vite(['resources/js/app.js'])
    </body>
</html>
