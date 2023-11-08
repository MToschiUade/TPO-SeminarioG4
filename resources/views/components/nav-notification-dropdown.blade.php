<!-- Notifications Dropdown area -->
<div class="relative md:block hidden">
    <button
      class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
        rounded-full text-[20px] flex flex-col items-center justify-center"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false">
      <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl" icon="heroicons-outline:bell"></iconify-icon>
      <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
          justify-center rounded-full text-white z-[99]">
        3</span>
    </button>
    <!-- Notifications Dropdown -->
    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
        dark:bg-slate-800 border dark:border-slate-900 !top-[18px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
      <div class="flex items-center justify-between py-4 px-4">
        <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Alertas</h3>
        <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">Ver Todas</a>
      </div>
      <div class="divide-y divide-slate-100 dark:divide-slate-900" role="none">
        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
          <div class="flex ltr:text-left rtl:text-right relative">
            <div class="flex-none ltr:mr-3 rtl:ml-3">
              <div class="h-8 w-8 bg-white rounded-full">
                <img
                  src="/images/icon/fire-station_red.png"
                  alt="user"
                  class="border-transparent block w-full h-full object-cover rounded-full border">
              </div>
            </div>
            <div class="flex-1">
              <a
                href="#"
                class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                  before:top-0 before:left-0">
                Alerta ROJA</a>
              <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Chaco: Focos activos en la provincia</div>
              3 min ago
            </div>
          </div>
        </div>
      </div>
      <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
        <div class="flex ltr:text-left rtl:text-right relative">
          <div class="flex-none ltr:mr-3 rtl:ml-3">
            <div class="h-8 w-8 bg-white rounded-full">
              <img
                src="/images/icon/fire-station_yellow.png"
                alt="user"
                class="border-transparent block w-full h-full object-cover rounded-full border">
            </div>
          </div>
          <div class="flex-1">
            <a
              href="#"
              class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
              Alerta AMARILLA</a>
            <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Neuquen: Potencial foco detectado</div>
            <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">3 min ago</div>
          </div>
        </div>
      </div>
      <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
        <div class="flex ltr:text-left rtl:text-right relative">
          <div class="flex-none ltr:mr-3 rtl:ml-3">
            <div class="h-8 w-8 bg-white rounded-full">
              <img
                src="/images/icon/fire-station_orange.png"
                alt="user"
                class="border-transparent block w-full h-full object-cover rounded-full border">
            </div>
          </div>
          <div class="flex-1">
            <a
              href="#"
              class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
              Alerta NARANJA</a>
            <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Cordoba: comenzaron a registrarse los primeros focos activos en la provincia</div>
            <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
              3 min ago
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
