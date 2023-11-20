<x-map-layout>
{{--    <div id="map" class=" w-full h-4"></div>--}}
    {{-- Se incluyen los marcadores de un archivo externo ver location--}}
    <div id="map" style="width: 100%; height: 85.7vh; overflow-y: hidden"></div>

    @push('scripts')
        <script>
            // Función para mostrar el modal alerta amarilla después de 3 segundos
            function mostrarModal() {
                let modal = document.getElementById("basic_modal");
                modal.style.display = "block"
                modal.classList.add("show")
            }

            function closeModal() {
                let modal = document.getElementById("basic_modal");
                modal.style.display = "none"
                modal.classList.remove("show")
            }

            // Esperar 3 segundos y luego mostrar el modal
            setTimeout(mostrarModal, 5000);
        </script>
        <script src="{{@asset('js/marcadores.js')}}"></script>
        <script type="module">
            // Basic Map
            /*testNasa().then(arrayDeDatos => {
                console.log(arrayDeDatos);
            });*/

            if (document.getElementById("map")) {
                // map active
                var position = [-34.60355339707198, -58.3815811344386];

                let map = L.map("map").setView(position, 5);

                // Crear una capa de marcadores
                let markerLayerFocos = L.layerGroup();
                let markerLayerClima = L.layerGroup();

                let clima = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                    maxZoom: 18,
                    subdomains:['mt0','mt1','mt2','mt3']
                })/*.addTo(map)*/;

                let focos = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    attribution:
                        '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                    maxZoom: 18,
                })/*.addTo(map)*/;


                let googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                    maxZoom: 20,
                    subdomains:['mt0','mt1','mt2','mt3']
                });

                let baseLayers = {
                    'Mapa Político': focos,
                    'Mapa Físico': clima,
                    'Mapa Satelital': googleSat
                };

                // Definir las capas adicionales para el control de capas
                let overlays = {
                    'Focos': markerLayerFocos,
                    'Clima': markerLayerClima
                };

                L.control.layers(baseLayers, overlays).addTo(map);

                focos.addTo(map);
                markerLayerFocos.addTo(map);
                // markerLayerClima.addTo(map);

                const fireIconRed = L.icon({
                    iconUrl: '{{@asset('images/icon/fire-station_red.png')}}',
                    // shadowUrl: 'leaf-shadow.png',
                    iconSize:     [40, 40], // size of the icon
                    //shadowSize:   [50, 64], // size of the shadow
                    iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
                    // shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
                });

                const fireIconYellow = L.icon({
                    iconUrl: '{{@asset('images/icon/fire-station_yellow.png')}}',
                    // shadowUrl: 'leaf-shadow.png',
                    iconSize:     [40, 40], // size of the icon
                    //shadowSize:   [50, 64], // size of the shadow
                    iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
                    // shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
                });

                const fireIconOrange = L.icon({
                    iconUrl: '{{@asset('images/icon/fire-station_orange.png')}}',
                    // shadowUrl: 'leaf-shadow.png',
                    iconSize:     [40, 40], // size of the icon
                    //shadowSize:   [50, 64], // size of the shadow
                    iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
                    // shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
                });


                /*L.marker(position, {icon:fireIcon})
                    .addTo(map)
                    .bindPopup(
                        '<div class="">Incendio Activo.</div>'
                    )
                    .openPopup();*/


                for (let i = 0; i < locations.length; i++) {
                    let icono = (locations[i][3] === 2) ? fireIconOrange : fireIconOrange;
                    icono = (locations[i][3] === 1) ? fireIconYellow : icono;
                    icono = (locations[i][3] === 2) ? fireIconRed : icono;

                    L.marker([locations[i][1], locations[i][2]], {icon:icono})
                        .addTo(markerLayerFocos)
                        .bindPopup(
                            '<div class="">Latitud: '+locations[i][1]+' <br/ >Longitud: '+locations[i][2]+'<div class="">'
                        )
                        .openPopup();

                    // let climaPos = clima([locations[i][1],locations[i][2]]);



                    climax(locations[i][1],locations[i][2])
                        .then(json => {
                            // Aquí puedes trabajar con el JSON retornado
                            // console.log(json); // Por ejemplo, imprimir el JSON en la consola
                            // También puedes acceder a propiedades específicas del JSON, por ejemplo:
                            let temperatura = json.current.temp_c;
                            let iconoClima = json.current.condition.icon;
                            let region = json.location.region;
                            let name = json.location.name;
                            let climaActual = json.current.condition.text;
                            let vientokph = json.current.wind_kph;
                            let vientodir = json.current.wind_dir;
                            console.log(`La temperatura actual es: ${temperatura}°C`);

                            L.marker([locations[i][1], locations[i][2]], {icon:L.icon({
                                    iconUrl: iconoClima,
                                    // shadowUrl: 'leaf-shadow.png',
                                    iconSize:     [40, 40], // size of the icon
                                    //shadowSize:   [50, 64], // size of the shadow
                                    iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
                                    // shadowAnchor: [4, 62],  // the same for the shadow
                                    popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
                                })})
                                .addTo(markerLayerClima)
                                .bindPopup(
                                    `<div class="">
                                            Provincia: ${region}<br>
                                            Localidad: ${name}<br>
                                            ----------------------------<br>
                                            ${climaActual}<br>
                                            La temperatura actual es: ${temperatura}°C<br>
                                            Velocidad del viento: ${vientokph}<br>
                                            Direccion del viento: ${vientodir}
                                    <div class="">`
                                )
                                .openPopup();

                        })
                        .catch(error => {
                            console.log('Ocurrió un error:', error);
                        });


                }

                // obtenerInformacionAPI();


                // Obtener informacion del clima
                function climax(latitud, longitud){
                    // return  false;
                    let requestOptions = {
                        method: 'GET',
                        redirect: 'follow'
                    };

                    return fetch(`https://api.weatherapi.com/v1/current.json?key=ec067b06dd834b61a91222439232910&q=${latitud},${longitud}&aqi=no&lang=es`, requestOptions)
                        .then(response => response.json())
                        .then(result => result)
                        .catch(error => console.log('error', error));
                }
            }

            //let c = clima(-23.9042900,-61.5087300);
            //console.log(c);

            // Pruebas veresiones api
            function testNasa() {
                var requestOptions = {
                    method: 'GET',
                    redirect: 'follow'
                };

                return fetch("https://firms.modaps.eosdis.nasa.gov/api/area/csv/a968b3209c442b21f8012701fca172b4/VIIRS_SNPP_NRT/world/1/2023-10-22", requestOptions)
                    .then(response => response.text())
                    .then(result => {
                        // Dividir la respuesta en líneas y almacenarlas en un array
                        let local = [];
                        let aInicial = result.split('\n');
                        aInicial.forEach(function(value, index){
                            // console.log(value);
                            local.push([value]);
                        });

                        return local;
                    })
                    .catch(error => {
                        console.log('error', error);
                        return [];
                    });
            }
            // Prueba manual
            function obtenerInformacionAPI(fecha) {
                //const apiUrl = 'https://firms.modaps.eosdis.nasa.gov/api/area/csv/a968b3209c442b21f8012701fca172b4/VIIRS_SNPP_NRT/world/1/2023-10-22';
                const proxyUrl = 'https://cors-anywhere.herokuapp.com/';

                // Mock

                fetch(proxyUrl + apiUrl)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error al obtener la información de la API:' + response.status);
                        }
                        return response.text();
                    })
                    .then(data => {
                        console.log(data);
                        const lines = data.trim().split('\n');
                        const headers = lines[0].split(',');
                        for (let i = 1; i < lines.length; i++) {
                            const currentLine = lines[i];
                            const values = currentLine.split(',');

                            // Crea un objeto para almacenar los valores de cada línea (opcional)
                            const row = {};

                            // Recorre cada valor y asigna los nombres de columna correspondientes
                            for (let j = 0; j < headers.length; j++) {
                                const columnName = headers[j].trim();
                                const value = values[j].trim();

                                // Realiza alguna acción con los valores, como imprimirlos en la consola
                                console.log(`Columna: ${columnName}, Valor: ${value}`);

                                // Por cada entrada genero un marcador
                                L.marker([values[0], values[1]], {icon:fireIcon})
                                    .addTo(map)
                                    .bindPopup(
                                        '<div class="">Incendio Activo.</div>'
                                    )
                                    .openPopup();

                                // Opcionalmente, agrega los valores al objeto row
                                row[columnName] = value;

                                // ¡Inserta aquí tus emojis para expresar cómo te sientes acerca de cada línea! 🚀📋🔍
                            }

                            // ¡Inserta aquí tus emojis para expresar cómo te sientes al finalizar la línea! 🎉🏁😊
                        }
                        // Aquí puedes realizar el procesamiento de los datos obtenidos según tus necesidades

                        // ¡Inserta aquí tus emojis para expresar cómo te sientes acerca de los datos obtenidos! 🎉📊😃

                    })
                    .catch(error => {
                        console.error('Error al obtener la información de la API:', error);
                        // ¡Inserta aquí tus emojis para expresar cómo te sientes acerca del error! 😔❌🚫
                    });
            }
        </script>
    @endpush
</x-map-layout>
