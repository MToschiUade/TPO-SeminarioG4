<x-app-layout>
    <div class="space-y-8">
        <div>
            <x-breadcrumb :page-title="$pageTitle" :breadcrumb-items="$breadcrumbItems" />
        </div>

        <div class="grid xl:grid-cols-10 grid-cols-10 gap-5 mx-auto">

            <!-- BEGIN: Basic Table -->
            <div class="card">
                <header class=" card-header noborder">
                    <button type="button" class="btn btn inline-flex justify-center btn-success">
                        <span class="flex items-center">
                            <span class="ltr:mr-2 rtl:ml-2 text-[20px]">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1m2 13a2 2 0 0 1-2-2V7m2 13a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8Z"></path>
                                </svg>
                            </span>
                            <span>
                                Exportar a Excel
                            </span>
                        </span>
                    </button>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class=" table-th ">
                                            FECHA
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            LATITUD
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            LONGITUD
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            VERSION SATELITE
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            BRILLO
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($datosHistoricos as $item)
                                        <tr>
                                            <td class="table-td">{{ date('d-m-Y h:m:i', strtotime($item['created_at'])) }}</td>
                                            <td class="table-td ">{{ $item['latitude'] }}</td>
                                            <td class="table-td">{{ $item['longitude'] }}</td>
                                            <td class="table-td ">{{ $item['version'] }}</td>
                                            <td class="table-td ">{{ $item['bright_ti5'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body flex flex-col p-6">
                        <div class="card-text h-full space-y-10 text-center">
                            <ul class="list-none">
                                <li class="inline-block"> <a href="{{$datosHistoricos->previousPageUrl()}}" class="flex items-center justify-center w-6 h-6 text-slate-600 mr-5 ml-5 text-sm font-Inter font-medium transition-all
                                            duration-300 relative dark:text-white">
                                        Anterior
                                    </a> </li>

                                <li class="inline-block">P&aacute;gina {{ $datosHistoricos->currentPage() }} de {{ $datosHistoricos->lastPage() }}&nbsp;&nbsp;</li>


                                <li class="inline-block"> <a href="{{$datosHistoricos->nextPageUrl()}}" class="flex items-center justify-center w-6 h-6 text-slate-600 ml-3 text-sm font-Inter font-medium transition-all
                                            duration-300 relative dark:text-white">
                                        &nbsp;&nbsp;&nbsp;Siguiente
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</x-app-layout>
