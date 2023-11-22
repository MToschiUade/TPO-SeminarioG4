<x-app-layout>
    <div class="space-y-8">
        <div>
            <x-breadcrumb :page-title="$pageTitle" :breadcrumb-items="$breadcrumbItems" />
        </div>
        <div class="grid xl:grid-cols-10 grid-cols-10 gap-5 mx-auto">

            <!-- BEGIN: Basic Table -->
            <div class="card">
                <header class=" card-header noborder">
                    <h6>Zonas de interés</h6>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class="table-th text-center">&nbsp;</th>
                                        <th scope="col" class="table-th text-center">
                                            ZONA
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            ALIAS
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            DESCRIPCION
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            LATITUD
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            LONGITUD
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            PANTALLA
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            WHATSAPP
                                        </th>
                                        <th scope="col" class="table-th text-center">
                                            MAIL
                                        </th>
                                        <th scope="col" class="table-th text-center">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($alertas as $item)
                                        <tr>
                                            <td class="table-td text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#0066ff" d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1Zm-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83l-6.94 6.93a1 1 0 0 0-.29.71Zm10.76-8.35l2.83 2.83l-1.42 1.42l-2.83-2.83ZM8 13.17l5.93-5.93l2.83 2.83L10.83 16H8Z"/></svg>
                                            </td>
                                            <td class="table-td text-center">{{ $item['id'] }}</td>
                                            <td class="table-td text-center">{{ $item['descripcion'] }}</td>
                                            <td class="table-td text-center">{{ $item['descripcion_larga'] }}</td>
                                            <td class="table-td text-center">{{ $item['latitude'] }}</td>
                                            <td class="table-td text-center">{{ $item['longitude'] }}</td>
                                            <td class="table-td text-center">
                                                @if($item['pantalla'])
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#66cc99" fill-rule="evenodd" d="M11 17H4a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h16a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-7v2h3a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2h3v-2ZM4 5h16a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg>
                                                @endif
                                            </td>
                                            <td class="table-td text-center">
                                                @if($item['whatsapp'])
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#66cc99" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z"/></svg>
                                                @endif
                                            </td>
                                            <td class="table-td text-center">
                                                @if($item['mail'])
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#66cc99" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 4.99L4 6h16zm0 12H4V8l8 5l8-5v10z"/></svg>
                                                @endif
                                            </td>
                                            <td class="table-td text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ff0000" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                                            </td>
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
                                <li class="inline-block"> <a href="{{$alertas->previousPageUrl()}}" class="flex items-center justify-center w-6 h-6 text-slate-600 mr-5 ml-5 text-sm font-Inter font-medium transition-all
                                            duration-300 relative dark:text-white">
                                        Anterior
                                    </a> </li>

                                <li class="inline-block">P&aacute;gina {{ $alertas->currentPage() }} de {{ $alertas->lastPage() }}&nbsp;&nbsp;</li>


                                <li class="inline-block"> <a href="{{$alertas->nextPageUrl()}}" class="flex items-center justify-center w-6 h-6 text-slate-600 ml-3 text-sm font-Inter font-medium transition-all
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
