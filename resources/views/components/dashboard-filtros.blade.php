<!-- BEGIN: Settings -->
<!-- Settings Toggle Button -->
<button
    class="fixed ltr:md:right-[-29px] ltr:right-0 rtl:left-0 rtl:md:left-[-29px] top-1/2 z-[888] translate-y-1/2 bg-slate-800 text-slate-50 dark:bg-slate-700 dark:text-slate-300 cursor-pointer transform rotate-90 flex items-center text-sm font-medium px-2 py-2 shadow-deep ltr:rounded-b rtl:rounded-t"
    data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
    <iconify-icon class="text-slate-50 text-lg animate-spin text-success-500" icon="material-symbols:help-outline-rounded">
    </iconify-icon>
    <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Ayuda</span>
</button>

<!-- BEGIN: Settings Modal -->
<div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96"
    tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
    <div
        class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300 dark:border-b-slate-900">
        <div>
            <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                Referencias
            </h3>
            <p class="block text-sm font-Inter font-light text-[#68768A] dark:text-[#eee]">Todo lo que necesita saber para estar bien informado</p>
        </div>
        <button type="button"
            class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="offcanvas">
            <iconify-icon icon="line-md:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body flex-grow overflow-y-auto">
        <div class="settings-modal">
            <div class="p-6">
                <!-- <h3>Skin</h3>
                <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                    <div class="input-group flex items-center">
                        <input type="radio" id="skin_default" name="skin-type" value="default"
                            class="themeCustomization-checkInput ">
                        <label for="skin_default" class="themeCustomization-checkInput-label">Default</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="skin_bordered" name="skin-type" value="bordered"
                            class="themeCustomization-checkInput">
                        <label for="skin_bordered" class="themeCustomization-checkInput-label">Bordered</label>
                    </div>
                </div> -->
                <h3 class="mt-4">Selector de mapas</h3>
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                    <thead class="bg-slate-200 dark:bg-slate-700">
                    <tr>
                        <th scope="col" class=" table-th ">
                            Detalle
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                    <tr>
                        <td class="table-td" style="text-transform: lowercase">
                            <img src="{{@asset('images/icon/fire_selector.png')}}" alt="thumb-1" style="float:left">
                            <span style="text-transform: capitalize">E</span>l control le permite seleccionar entre los distintos tipos de mapas, y activar los marcadores de focos y clima.
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h3 class="mt-4">Focos Incendios</h3>
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                <thead class="bg-slate-200 dark:bg-slate-700">
                <tr>
                    <th scope="col" class=" table-th ">
                        Icono
                    </th>
                    <th scope="col" class=" table-th ">
                        Detalle
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                    <tr>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">
                            <img src="{{@asset('images/icon/fire-station_red.png')}}" alt="thumb-1" class="max-w-full block rounded-md border-4 border-slate-300" style="max-width: 40px; height: auto">
                        </td>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">Alta probabilidad </td>
                    </tr>
                    <tr>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">
                            <img src="{{@asset('images/icon/fire-station_orange.png')}}" alt="thumb-1" class="max-w-full block rounded-md border-4 border-slate-300" style="max-width: 40px; height: auto">
                        </td>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">Media probabilidad</td>
                    </tr>
                    <tr>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">
                            <img src="{{@asset('images/icon/fire-station_yellow.png')}}" alt="thumb-1" class="max-w-full block rounded-md border-4 border-slate-300" style="max-width: 40px; height: auto">
                        </td>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">Baja probabilidad</td>
                    </tr>
                    <tr>
                        <td class="table-td" colspan="2" style="text-transform: lowercase">
                            <span style="text-transform: capitalize">E</span>l valor de probabilidad se calcula a partir de una serie de algoritmos utilizados en la detecci&oacute;n de incendios.
                            Su prop&oacute;sito es permitir a los usuarios evaluar la calidad de los puntos de acceso o p&iacute;xeles individuales que representan fuegos.
                            Las estimaciones de confianza van del 0 al 100% y se clasifican en tres categor&iacute;as de fuego: baja confianza, confianza nominal y alta confianza.
                        </td>
                    </tr>
                </tbody>
                </table>
                {{--<form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
                    <div class="input-group flex items-center">
                        <input type="radio" id="light" name="theme" value="light" class="themeCustomization-checkInput">
                        <label for="light" class="themeCustomization-checkInput-label">Activos</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="dark" name="theme" value="dark" class="themeCustomization-checkInput">
                        <label for="dark" class="themeCustomization-checkInput-label">Controlados</label>
                    </div>
                    <div class="input-group flex items-center">
                        <input type="radio" id="semiDark" name="theme" value="semiDark"
                            class="themeCustomization-checkInput">
                        <label for="semiDark" class="themeCustomization-checkInput-label">Contenidos</label>
                    </div>
                </form>--}}
                <h3 class="mt-4">Clima</h3>
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                    <thead class="bg-slate-200 dark:bg-slate-700">
                    <tr>
                        <th scope="col" class=" table-th ">
                            &nbsp;
                        </th>
                        <th scope="col" class=" table-th ">
                            Detalle
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                    <tr>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">
                            <img src="{{@asset('images/icon/299.png')}}" alt="thumb-1" class="max-w-full block rounded-md border-4 border-slate-300" style="max-width: 40px; height: auto">
                        </td>
                        <td class="table-td" style="padding: 1rem 0.7rem 0.7rem 1.25rem">En cada marcador del mapa donde se encuentre un posible foco la capa de clima mostrara el clima del lugar y su detalle.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="divider"></div>

            <div class="p-6">
                <!-- <div class="flex items-center justify-between">
                    <h3 class="!mb-0">Semi Dark</h3>
                    <label id="semi_dark"
                        class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                    </label>
                </div> -->
                <div class="flex items-center justify-between mt-5">

                </div>
            </div>
            <div class="divider"></div>

            <div class="divider"></div>

        </div>
    </div>
</div>
<!-- END: Settings Modal -->
<!-- END: Settings -->
