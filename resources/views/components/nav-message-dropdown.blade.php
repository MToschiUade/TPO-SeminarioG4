<!-- Mail Dropdown -->
<div class="relative md:block hidden">
    <button
        class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
        rounded-full text-[20px] flex flex-col items-center justify-center"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false">
        <iconify-icon class="text-slate-800 dark:text-white text-xl" icon="heroicons-outline:mail"></iconify-icon>
        <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[45]">
        1</span>
    </button>
    <!-- Mail Dropdown -->
    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
        dark:bg-slate-800 border dark:border-slate-900 !top-[18px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
        <div class="flex items-center justify-between py-4 px-4">
        <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white"><span style="color: red">Mensajes de Alerta</span></h3>
        <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">Ver todos</a>
        </div>
        <div class="divide-y divide-slate-100 dark:divide-slate-900" role="none">
        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
            <div class="flex-none">
                <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                <span class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                    right-0 top-0"></span>
                <img
                    src="/images/icon/fire-station_yellow.png"
                    alt="user"
                    class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                </div>
            </div>
            <div class="flex-1">
                <a data-bs-toggle="modal" data-bs-target="#basic_modal"
                href="#"
                class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                    before:top-0 before:left-0">
                ZONA 1: Alerta AMARILLA</a>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1 font-bold">Patiño, Formosa</div>
                <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Detecci&oacute;n temprana de posible foco</div>
                <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Coordenadas: <span> -25.04494, -60.55855</span></div>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1"><span style="color: black">EMERGENCIAS:</span></div>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Télefono: <a href="tel:0370 442-8888">0370 442-8888</a></div>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Direcci&oacute;n: P3600 Formosa</div>
                <div class="text-slate-400 dark:text-slate-400 text-xs">
                15 min atras</div>
            </div>
            <div class="flex-0">
                <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                1</span>
            </div>
            </div>
        </div>

        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                <div class="flex-none">
                    <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
            <span class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                        <img
                            src="/images/icon/fire-station_orange.png"
                            alt="user"
                            class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                    </div>
                </div>
                <div class="flex-1">
                    <a data-bs-toggle="modal" data-bs-target="#basic_modal_naranja"
                       href="#"
                       class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                        ZONA 3: Alerta NARANJA</a>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1 font-bold">Santo Domingo, Salta</div>
                    <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Foco de riesgo medio detectado</div>
                    <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Coordenadas: <span> -24.42417, -62.79539</span></div>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1"><span style="color: black">EMERGENCIAS:</span></div>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Télefono: <a href="tel:0387 423-3333">0387 423-3333</a></div>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Direcci&oacute;n: Alberdi 943 4400 Salta, Provincia de Salta, Argentina</div>
                    <div class="text-slate-400 dark:text-slate-400 text-xs">
                        15 min atras</div>
                </div>
                <div class="flex-0">
            <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
            1</span>
                </div>
            </div>
        </div>

        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                <div class="flex-none">
                    <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
            <span class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                        <img
                            src="/images/icon/fire-station_red.png"
                            alt="user"
                            class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                    </div>
                </div>
                <div class="flex-1">
                    <a data-bs-toggle="modal" data-bs-target="#basic_modal_roja"
                       href="#"
                       class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                        ZONA 2: Alerta ROJA</a>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1 font-bold">Campo Gallo, Sgo. del Estero</div>
                    <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Foco activo detectado</div>
                    <div class="text-xs hover:text-[#68768A] text-slate-800 dark:text-slate-800 mb-1">Coordenadas: <span> -26.69996, -62.97368</span></div>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1"><span style="color: black">EMERGENCIAS:</span></div>
                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Télefono: <a href="tel:0385 485-8031">0385 485-8031</a></div>
                    <div class="text-slate-400 dark:text-slate-400 text-xs">
                        5 min atras</div>
                </div>
                <div class="flex-0">
            <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
            1</span>
                </div>
            </div>
        </div>
        {{--<div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
            <div class="flex-none">
                <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                    right-0 top-0"></span>
                <img
                    src="/images/all-img/user2.png"
                    alt="user"
                    class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                </div>
            </div>
            <div class="flex-1">
                <a
                href="#"
                class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                    before:top-0 before:left-0">
                Savannah Nguyen</a>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Hi! How are you doing?.....</div>
                <div class="text-slate-400 dark:text-slate-400 text-xs">3 min atras
                </div>
            </div>
            </div>
        </div>--}}
        {{--<div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
            <div class="flex-none">
                <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                    right-0 top-0"></span>
                <img
                    src="/images/all-img/user3.png"
                    alt="user"
                    class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                </div>
            </div>
            <div class="flex-1">
                <a
                href="#"
                class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                    before:top-0 before:left-0">
                Ralph Edwards</a>
                <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Hi! How are you doing?.....</div>
                <div class="text-slate-400 dark:text-slate-400 text-xs">
                3 min atras
                </div>
            </div>
            <div class="flex-0">
                <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                8</span>
            </div>
            </div>
        </div>--}}
        </div>
    </div>
</div>
