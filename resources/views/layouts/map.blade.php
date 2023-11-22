<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light nav-floating">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <x-favicon />
    <title>{{ config('app.name', 'dashcode') }}</title>

    {{-- Scripts --}}
    @vite(['resources/css/app.scss', 'resources/js/custom/store.js'])
</head>

<body class="font-inter dashcode-app" id="body_class">
    <div class="app-wrapper">

        <!-- BEGIN: Sidebar Navigation -->
        <x-sidebar-menu />
        <!-- End: Sidebar -->

        <!-- BEGIN: Settings -->
{{--        <x-dashboard-settings />--}}
        <x-dashboard-filtros />
        <!-- End: Settings -->

        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: header -->
                <x-dashboard-header />
                <!-- BEGIN: header -->

                <div class="content-wrapper transition-all duration-150 ltr:ml-0 xl:ltr:ml-[248px] rtl:mr-0 xl:rtl:mr-[248px]" id="content_wrapper">
                    <div class="page-content" style="padding: 0; overflow-y: hidden">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <main id="content_layout">
                                <!-- Page Content -->
                                {{ $slot }}
                            </main>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: footer -->
            <x-dashboard-footer />
            <!-- BEGIN: footer -->

        </div>
        {{--Modal para alerta amarilla--}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="basic_modal" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
            <!-- BEGIN: Modal -->
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600" style="background-color: yellow; background-image: url('{{@asset('images/alertas/fondo_alerta_amarillo.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                            <h3 class="text-xl font-medium dark:text-white capitalize">
                                Alerta Amarilla
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                ZONA 1: Campo La Libertad
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                Deteccion temprana de posible foco <br>
                                Coordenadas: -25.04494, -60.55855<br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                CLIMA
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                <span class="font-bold">Parcialmente nublado</span> <br>
                                La temperatura actual es: <span class="font-bold">32.7°C</span> <br>
                                Velocidad del viento: <span class="font-bold">19.1</span> <br>
                                Dirección del viento: <span class="font-bold">SE</span> <br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                EMERGENCIAS
                            </h6>
                            <p>
                                Télefono: <a href="tel:0370 442-8888">0370 442-8888</a><br>
                                Direcci&oacute;n: P3600 Formosa
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                            <button data-bs-dismiss="modal" class="btn inline-flex text-white justify-center bg-slate-900" onclick="closeModal()">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modals -->
        </div>
        {{--Modal para alerta naranaja--}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="basic_modal_naranja" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
            <!-- BEGIN: Modal -->
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600" style="background-color: orange; background-image: url('{{@asset('images/alertas/fondo_alerta_naranja.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                            <h3 class="text-xl font-medium dark:text-white capitalize">
                                Alerta Naranja
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                ZONA 3: Santo Domingo
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                Foco de riesgo medio detectado <br>
                                Coordenadas: -24.42417, -62.79539<br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                CLIMA
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                <span class="font-bold">Soleado</span> <br>
                                La temperatura actual es: <span class="font-bold">34°C</span> <br>
                                Velocidad del viento: <span class="font-bold">12.2</span> <br>
                                Dirección del viento: <span class="font-bold">NNE</span> <br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                EMERGENCIAS
                            </h6>
                            <p>
                                Télefono: <a href="tel:0387 423-3333">0387 423-3333</a><br>
                                Direcci&oacute;n: Alberdi 943 4400 Salta, Provincia de Salta, Argentina<br>
                                Web: <a href="http://bomberosdesalta.com.ar/" target="_blank">Bomberos voluntarios</a>
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                            <button data-bs-dismiss="modal" class="btn inline-flex text-white justify-center bg-slate-900" onclick="closeModal()">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modals -->
        </div>
        {{--Modal para alerta roja--}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="basic_modal_roja" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
            <!-- BEGIN: Modal -->
            <div class="modal-dialog relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600" style="background-color: red; background-image: url('{{@asset('images/alertas/fondo_alerta_rojo.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                            <h3 class="text-xl font-medium dark:text-white capitalize">
                                Alerta Roja
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                ZONA 2: Campo Gallo
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                Foco activo detectado <br>
                                Coordenadas: -26.69996, -62.97368<br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                CLIMA
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                <span class="font-bold">Parcialmente nublado</span> <br>
                                La temperatura actual es: <span class="font-bold">35.2°C</span> <br>
                                Velocidad del viento: <span class="font-bold">16.2</span> <br>
                                Dirección del viento: <span class="font-bold">NNE</span> <br>
                            </p>
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                EMERGENCIAS
                            </h6>
                            <p>
                                Télefono: <a href="tel:0385 485-8031">0385 485-8031</a><br>
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                            <button data-bs-dismiss="modal" class="btn inline-flex text-white justify-center bg-slate-900" onclick="closeModal()">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modals -->
        </div>
        {{--Fin Modal para alerta roja--}}


    </div>

    @vite(['resources/js/app.js', 'resources/js/main.js'])


    @stack('scripts')
</body>

</html>
