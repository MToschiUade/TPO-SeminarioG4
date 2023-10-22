<x-map-layout>
{{--    <div id="map" class=" w-full h-4"></div>--}}
    <div id="map" style="width: 100%; height: 85.7vh; overflow-y: hidden"></div>

    @push('scripts')
        <script type="module">
            // Basic Map
            if (document.getElementById("map")) {
                // map active
                var position = [-34.60355339707198, -58.3815811344386];
                let locations = [
                    ["LOCATION_1",-22.5705800,-62.5261700],
                    ["LOCATION_2",-22.2516800,-63.5675800],
                    ["LOCATION_3",-22.2498700,-63.5549700],
                    ["LOCATION_4",-22.2491100,-63.5588600],
                    ["LOCATION_5",-22.2483600,-63.5627600],
                    ["LOCATION_6",-22.2476000,-63.5666600],
                    ["LOCATION_7",-22.2468400,-63.5705600],
                    ["LOCATION_8",-22.2465400,-63.5501600],
                    ["LOCATION_9",-22.2457900,-63.5540500],
                    ["LOCATION_10",-22.2450300,-63.5579400],
                    ["LOCATION_11",-22.2442700,-63.5618500],
                    ["LOCATION_12",-22.2435100,-63.5657500],
                    ["LOCATION_13",-22.0707000,-63.3123300],
                    ["LOCATION_14",-22.0699700,-63.3161400],
                    ["LOCATION_15",-22.0692300,-63.3199400],
                    ["LOCATION_16",-22.0685000,-63.3237400],
                    ["LOCATION_17",-30.7805900,-59.4512200],
                    ["LOCATION_18",-30.2528700,-60.2814100],
                    ["LOCATION_19",-30.2495500,-60.2807000],
                    ["LOCATION_20",-28.4684100,-65.2277900],
                    ["LOCATION_21",-28.2569000,-58.1486300],
                    ["LOCATION_22",-27.3085900,-65.4756000],
                    ["LOCATION_23",-26.6942500,-62.2976400],
                    ["LOCATION_24",-26.6185500,-64.5900500],
                    ["LOCATION_25",-26.6145400,-64.5890500],
                    ["LOCATION_26",-26.5732000,-60.5786400],
                    ["LOCATION_27",-26.5698100,-60.5779400],
                    ["LOCATION_28",-26.4434100,-60.3926800],
                    ["LOCATION_29",-26.4407000,-60.3879900],
                    ["LOCATION_30",-26.4400300,-60.3919700],
                    ["LOCATION_31",-26.4348000,-61.6466500],
                    ["LOCATION_32",-26.4313000,-61.6458900],
                    ["LOCATION_33",-26.3157800,-61.3939500],
                    ["LOCATION_34",-26.3133700,-61.3917400],
                    ["LOCATION_35",-26.3126200,-61.3959800],
                    ["LOCATION_36",-26.3123100,-61.3932000],
                    ["LOCATION_37",-26.2027100,-61.3582100],
                    ["LOCATION_38",-26.2019800,-61.3624500],
                    ["LOCATION_39",-26.1985100,-61.3616900],
                    ["LOCATION_40",-26.1429900,-61.9410600],
                    ["LOCATION_41",-26.1394400,-61.9402900],
                    ["LOCATION_42",-26.1366900,-61.9350700],
                    ["LOCATION_43",-26.1358900,-61.9395100],
                    ["LOCATION_44",-26.1347300,-61.9254400],
                    ["LOCATION_45",-26.0042300,-61.6226800],
                    ["LOCATION_46",-25.9864700,-59.1875000],
                    ["LOCATION_47",-25.9858600,-59.1913600],
                    ["LOCATION_48",-25.9831400,-59.1868600],
                    ["LOCATION_49",-25.9825300,-59.1907000],
                    ["LOCATION_50",-25.6609600,-58.1258700],
                    ["LOCATION_51",-25.6558100,-58.4499100],
                    ["LOCATION_52",-25.6487800,-58.4288100],
                    ["LOCATION_53",-25.4723100,-58.3500300],
                    ["LOCATION_54",-25.4689700,-58.3494100],
                    ["LOCATION_55",-25.4656400,-58.3487800],
                    ["LOCATION_56",-25.4623100,-58.3481600],
                    ["LOCATION_57",-25.4122600,-59.3495600],
                    ["LOCATION_58",-25.2981600,-58.7084700],
                    ["LOCATION_59",-25.2915000,-58.7072000],
                    ["LOCATION_60",-25.0999900,-59.3984500],
                    ["LOCATION_61",-25.0993600,-59.4023100],
                    ["LOCATION_62",-25.0987300,-59.4061700],
                    ["LOCATION_63",-25.0978900,-59.3900900],
                    ["LOCATION_64",-25.0972700,-59.3939400],
                    ["LOCATION_65",-25.0966400,-59.3978000],
                    ["LOCATION_66",-25.0960200,-59.4016600],
                    ["LOCATION_67",-25.0953900,-59.4055100],
                    ["LOCATION_68",-25.0947600,-59.4093700],
                    ["LOCATION_69",-25.0945500,-59.3894300],
                    ["LOCATION_70",-25.0941400,-59.4132300],
                    ["LOCATION_71",-25.0939200,-59.3932800],
                    ["LOCATION_72",-25.0933000,-59.3971400],
                    ["LOCATION_73",-25.0926700,-59.4010000],
                    ["LOCATION_74",-25.0920400,-59.4048600],
                    ["LOCATION_75",-25.0914200,-59.4087100],
                    ["LOCATION_76",-25.0912100,-59.3887700],
                    ["LOCATION_77",-25.0907900,-59.4125700],
                    ["LOCATION_78",-25.0905800,-59.3926300],
                    ["LOCATION_79",-25.0901700,-59.4164300],
                    ["LOCATION_80",-25.0899500,-59.3964800],
                    ["LOCATION_81",-25.0893300,-59.4003400],
                    ["LOCATION_82",-25.0887000,-59.4042100],
                    ["LOCATION_83",-25.0884900,-59.3842700],
                    ["LOCATION_84",-25.0880800,-59.4080600],
                    ["LOCATION_85",-25.0878600,-59.3881200],
                    ["LOCATION_86",-25.0874500,-59.4119100],
                    ["LOCATION_87",-25.0872400,-59.3919700],
                    ["LOCATION_88",-25.0868200,-59.4157700],
                    ["LOCATION_89",-25.0861900,-59.4196300],
                    ["LOCATION_90",-25.0853600,-59.4035500],
                    ["LOCATION_91",-25.0851500,-59.3836100],
                    ["LOCATION_92",-25.0847300,-59.4073900],
                    ["LOCATION_93",-25.0845200,-59.3874700],
                    ["LOCATION_94",-25.0841000,-59.4112500],
                    ["LOCATION_95",-25.0838900,-59.3913200],
                    ["LOCATION_96",-25.0834800,-59.4151100],
                    ["LOCATION_97",-25.0832700,-59.3951800],
                    ["LOCATION_98",-25.0830600,-59.3752400],
                    ["LOCATION_99",-25.0826400,-59.3990300],
                    ["LOCATION_100",-25.0824300,-59.3791000],
                    ["LOCATION_101",-25.0820100,-59.4028900],
                    ["LOCATION_102",-25.0818000,-59.3829500],
                    ["LOCATION_103",-25.0813900,-59.4067400],
                    ["LOCATION_104",-25.0811800,-59.3868100],
                    ["LOCATION_105",-25.0809700,-59.3668800],
                    ["LOCATION_106",-25.0807600,-59.4106000],
                    ["LOCATION_107",-25.0805500,-59.3906700],
                    ["LOCATION_108",-25.0803400,-59.3707300],
                    ["LOCATION_109",-25.0801300,-59.4144600],
                    ["LOCATION_110",-25.0799200,-59.3945200],
                    ["LOCATION_111",-25.0797100,-59.3745900],
                    ["LOCATION_112",-25.0793000,-59.3983800],
                    ["LOCATION_113",-25.0790900,-59.3784400],
                    ["LOCATION_114",-25.0786700,-59.4022300],
                    ["LOCATION_115",-25.0784600,-59.3823000],
                    ["LOCATION_116",-25.0780400,-59.4060800],
                    ["LOCATION_117",-25.0778300,-59.3861600],
                    ["LOCATION_118",-25.0776200,-59.3662200],
                    ["LOCATION_119",-25.0772100,-59.3900100],
                    ["LOCATION_120",-25.0770000,-59.3700800],
                    ["LOCATION_121",-25.0767900,-59.4138000],
                    ["LOCATION_122",-25.0765800,-59.3938600],
                    ["LOCATION_123",-25.0763700,-59.3739300],
                    ["LOCATION_124",-25.0759500,-59.3977200],
                    ["LOCATION_125",-25.0757400,-59.3777900],
                    ["LOCATION_126",-25.0753300,-59.4015700],
                    ["LOCATION_127",-25.0751200,-59.3816500],
                    ["LOCATION_128",-25.0747000,-59.4054300],
                    ["LOCATION_129",-25.0744900,-59.3855000],
                    ["LOCATION_130",-25.0740700,-59.4092900],
                    ["LOCATION_131",-25.0738700,-59.3893500],
                    ["LOCATION_132",-25.0736600,-59.3694300],
                    ["LOCATION_133",-25.0734400,-59.4131400],
                    ["LOCATION_134",-25.0732400,-59.3932100],
                    ["LOCATION_135",-25.0730300,-59.3732800],
                    ["LOCATION_136",-25.0724000,-59.3771400],
                    ["LOCATION_137",-25.0719800,-59.4009200],
                    ["LOCATION_138",-25.0717800,-59.3809900],
                    ["LOCATION_139",-25.0711500,-59.3848500],
                    ["LOCATION_140",-25.0703100,-59.3687700],
                    ["LOCATION_141",-25.0698900,-59.3925500],
                    ["LOCATION_142",-25.0696900,-59.3726200],
                    ["LOCATION_143",-25.0690600,-59.3764800],
                    ["LOCATION_144",-25.0688500,-59.3565500],
                    ["LOCATION_145",-25.0684300,-59.3803300],
                    ["LOCATION_146",-25.0682200,-59.3604000],
                    ["LOCATION_147",-25.0676000,-59.3642600],
                    ["LOCATION_148",-25.0669700,-59.3681100],
                    ["LOCATION_149",-25.0665500,-59.3919000],
                    ["LOCATION_150",-25.0663400,-59.3719700],
                    ["LOCATION_151",-25.0661400,-59.3520400],
                    ["LOCATION_152",-25.0659300,-59.3957600],
                    ["LOCATION_153",-25.0657200,-59.3758200],
                    ["LOCATION_154",-25.0655100,-59.3559000],
                    ["LOCATION_155",-25.0648800,-59.3597500],
                    ["LOCATION_156",-25.0642500,-59.3636100],
                    ["LOCATION_157",-25.0636300,-59.3674600],
                    ["LOCATION_158",-25.0630000,-59.3713200],
                    ["LOCATION_159",-25.0627900,-59.3513900],
                    ["LOCATION_160",-25.0621700,-59.3552400],
                    ["LOCATION_161",-25.0609100,-59.3629500],
                    ["LOCATION_162",-25.0588200,-59.3546000],
                    ["LOCATION_163",-25.0582000,-59.3584500],
                    ["LOCATION_164",-25.0575700,-59.3623000],
                    ["LOCATION_165",-24.9945300,-58.2872600],
                    ["LOCATION_166",-24.9801900,-58.2581600],
                    ["LOCATION_167",-24.9741100,-58.2530900],
                    ["LOCATION_168",-24.9735200,-58.2569200],
                    ["LOCATION_169",-24.9707800,-58.2524700],
                    ["LOCATION_170",-24.9674500,-58.2518500],
                    ["LOCATION_171",-24.9668500,-58.2556700],
                    ["LOCATION_172",-24.9558800,-59.7667800],
                    ["LOCATION_173",-24.9537600,-59.5895800],
                    ["LOCATION_174",-24.9531600,-59.7622000],
                    ["LOCATION_175",-24.9525200,-59.7661100],
                    ["LOCATION_176",-24.9512800,-64.0711700],
                    ["LOCATION_177",-24.9510600,-64.0719100],
                    ["LOCATION_178",-24.9498000,-59.7615300],
                    ["LOCATION_179",-24.9397100,-59.7595300],
                    ["LOCATION_180",-24.9269700,-58.5114100],
                    ["LOCATION_181",-24.9263700,-58.5152300],
                    ["LOCATION_182",-24.9230400,-58.5146000],
                    ["LOCATION_183",-24.9192900,-59.9253700],
                    ["LOCATION_184",-24.9165600,-59.9207600],
                    ["LOCATION_185",-24.9159100,-59.9246900],
                    ["LOCATION_186",-24.9131900,-59.9200800],
                    ["LOCATION_187",-24.8825600,-63.6019500],
                    ["LOCATION_188",-24.8815400,-58.7344900],
                    ["LOCATION_189",-24.8815200,-63.6074000],
                    ["LOCATION_190",-24.8786500,-63.6010400],
                    ["LOCATION_191",-24.8782100,-58.7338600],
                    ["LOCATION_192",-24.8776100,-63.6064900],
                    ["LOCATION_193",-24.8183100,-60.6834400],
                    ["LOCATION_194",-24.8176000,-60.6875400],
                    ["LOCATION_195",-24.6945500,-60.4075800],
                    ["LOCATION_196",-24.6938700,-60.4116100],
                    ["LOCATION_197",-24.6904500,-60.4109100],
                    ["LOCATION_198",-24.6733500,-60.7195400],
                    ["LOCATION_199",-24.6706000,-60.7147100],
                    ["LOCATION_200",-24.6699000,-60.7188200],
                    ["LOCATION_201",-24.6678600,-60.7098800],
                    ["LOCATION_202",-24.6671500,-60.7140000],
                    ["LOCATION_203",-24.6664500,-60.7181100],
                    ["LOCATION_204",-24.6644100,-60.7091700],
                    ["LOCATION_205",-24.6637100,-60.7132800],
                    ["LOCATION_206",-24.6037400,-59.1389300],
                    ["LOCATION_207",-24.6031200,-59.1427500],
                    ["LOCATION_208",-24.6025100,-59.1465800],
                    ["LOCATION_209",-24.5039300,-59.9391800],
                    ["LOCATION_210",-24.4872600,-60.9408500],
                    ["LOCATION_211",-24.4845200,-60.9359400],
                    ["LOCATION_212",-24.4837800,-60.9401200],
                    ["LOCATION_213",-24.2890400,-59.6124000],
                    ["LOCATION_214",-24.0787500,-62.1830900],
                    ["LOCATION_215",-23.9134300,-61.5198700],
                    ["LOCATION_216",-23.9126300,-61.5243100],
                    ["LOCATION_217",-23.9118300,-61.5287500],
                    ["LOCATION_218",-23.9114500,-61.5102500],
                    ["LOCATION_219",-23.9110200,-61.5332000],
                    ["LOCATION_220",-23.9106500,-61.5146700],
                    ["LOCATION_221",-23.9098500,-61.5191100],
                    ["LOCATION_222",-23.9090500,-61.5235600],
                    ["LOCATION_223",-23.9086700,-61.5050500],
                    ["LOCATION_224",-23.9082500,-61.5279900],
                    ["LOCATION_225",-23.9078700,-61.5094900],
                    ["LOCATION_226",-23.9070700,-61.5139100],
                    ["LOCATION_227",-23.9070500,-61.5069100],
                    ["LOCATION_228",-23.9062700,-61.5183500],
                    ["LOCATION_229",-23.9062700,-61.5113500],
                    ["LOCATION_230",-23.9055000,-61.5158000],
                    ["LOCATION_231",-23.9054700,-61.5228000],
                    ["LOCATION_232",-23.9047100,-61.5202400],
                    ["LOCATION_233",-23.9046600,-61.5272300],
                    ["LOCATION_234",-23.9042900,-61.5087300],
                    ["LOCATION_235",-23.9039300,-61.5246800],
                    ["LOCATION_236",-23.9034900,-61.5131600],
                    ["LOCATION_237",-23.9026900,-61.5175900],
                    ["LOCATION_238",-23.9019100,-61.5150300],
                    ["LOCATION_239",-23.9018800,-61.5220400],
                    ["LOCATION_240",-23.9011300,-61.5194800],
                    ["LOCATION_241",-23.9003500,-61.5239300],
                    ["LOCATION_242",-23.8991100,-61.5168400],
                    ["LOCATION_243",-23.8983000,-61.5212800],
                    ["LOCATION_244",-23.8975500,-61.5187200],
                    ["LOCATION_245",-23.8783300,-61.4594400],
                    ["LOCATION_246",-23.7845800,-61.1258400],
                    ["LOCATION_247",-23.7818100,-61.1208000],
                    ["LOCATION_248",-23.7752400,-61.1372600],
                    ["LOCATION_249",-23.7724700,-61.1322200],
                    ["LOCATION_250",-23.7717100,-61.1365200],
                    ["LOCATION_251",-23.7445100,-61.2069000],
                    ["LOCATION_252",-23.7429000,-61.2029800],
                    ["LOCATION_253",-23.7421500,-61.2073100],
                    ["LOCATION_254",-23.7417400,-61.2018400],
                    ["LOCATION_255",-23.7409700,-61.2061700],
                    ["LOCATION_256",-23.7408700,-61.1935800],
                    ["LOCATION_257",-23.7401100,-61.1979100],
                    ["LOCATION_258",-23.7397500,-61.1924600],
                    ["LOCATION_259",-23.7393600,-61.2022400],
                    ["LOCATION_260",-23.7389800,-61.1967800],
                    ["LOCATION_261",-23.7382000,-61.2011000],
                    ["LOCATION_262",-23.7380800,-61.1885100],
                    ["LOCATION_263",-23.7373300,-61.1928400],
                    ["LOCATION_264",-23.7352900,-61.1834400],
                    ["LOCATION_265",-23.7325100,-61.1783800],
                    ["LOCATION_266",-23.7284500,-61.1596300],
                    ["LOCATION_267",-23.6795200,-61.3753500],
                    ["LOCATION_268",-23.6787500,-61.3797500],
                    ["LOCATION_269",-23.6077200,-61.5073400],
                    ["LOCATION_270",-38.3405600,-68.4251200],
                    ["LOCATION_271",-38.2735700,-68.7003900],
                    ["LOCATION_272",-46.5348400,-68.8305600]
                ];
                var map = L.map("map").setView(position, 5);

                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    attribution:
                        '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                    maxZoom: 18,
                }).addTo(map);

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
                    L.marker([locations[i][1], locations[i][2]], {icon:fireIconRed})
                        .addTo(map)
                        .bindPopup(
                            '<div class="">Latitud: '+locations[i][1]+' <br/ >Longitud: '+locations[i][2]+'</div>'
                        )
                        .openPopup();
                }

                // obtenerInformacionAPI();
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
