<x-map-layout>
{{--    <div id="map" class=" w-full h-4"></div>--}}
    <div id="map" style="width: 100%; height: 85.7vh; overflow-y: hidden"></div>

    @push('scripts')
        <script type="module">
            // Basic Map
            /*testNasa().then(arrayDeDatos => {
                console.log(arrayDeDatos);
            });*/

            if (document.getElementById("map")) {
                // map active
                var position = [-34.60355339707198, -58.3815811344386];
                let locations = [
                    ["LOCATION_273",-26.3909300,-54.6321000,2],
                    ["LOCATION_274",-25.6742500,-59.1861100,1],
                    ["LOCATION_275",-25.6731800,-59.1916500,2],
                    ["LOCATION_276",-25.6360600,-59.2349100,1],
                    ["LOCATION_277",-25.6266500,-59.0134500,2],
                    ["LOCATION_278",-25.6197900,-59.8926200,0],
                    ["LOCATION_279",-25.6157200,-59.8916200,1],
                    ["LOCATION_280",-25.5358900,-59.2097100,1],
                    ["LOCATION_281",-25.4857300,-59.9761700,1],
                    ["LOCATION_282",-25.4849200,-59.9802400,2],
                    ["LOCATION_283",-25.4816300,-59.9751600,2],
                    ["LOCATION_284",-25.4808100,-59.9792400,0],
                    ["LOCATION_285",-25.4775100,-59.9741600,1],
                    ["LOCATION_286",-25.4759200,-60.0684700,0],
                    ["LOCATION_287",-25.4734400,-60.0592100,1],
                    ["LOCATION_288",-25.4726100,-60.0633400,1],
                    ["LOCATION_289",-25.4717800,-60.0674600,1],
                    ["LOCATION_290",-25.4693000,-60.0582100,0],
                    ["LOCATION_291",-25.4684800,-60.0623300,1],
                    ["LOCATION_292",-25.4676500,-60.0664500,2],
                    ["LOCATION_293",-25.4287300,-59.2649900,0],
                    ["LOCATION_294",-25.4134500,-57.8362700,0],
                    ["LOCATION_295",-25.4097700,-57.8354400,2],
                    ["LOCATION_296",-25.4089000,-57.8402100,1],
                    ["LOCATION_297",-25.4021300,-59.2528400,1],
                    ["LOCATION_298",-25.3940300,-59.0699800,1],
                    ["LOCATION_299",-25.3219000,-59.3386900,1],
                    ["LOCATION_300",-25.3129200,-60.8711100,1],
                    ["LOCATION_301",-25.3119700,-60.8757300,1],
                    ["LOCATION_302",-25.3085700,-60.8700100,1],
                    ["LOCATION_303",-25.2252400,-59.9001700,1],
                    ["LOCATION_304",-25.2211300,-59.8991800,1],
                    ["LOCATION_305",-25.2195600,-58.9061100,0],
                    ["LOCATION_306",-25.0909400,-59.8983600,0],
                    ["LOCATION_307",-25.0868200,-59.8973700,2],
                    ["LOCATION_308",-25.0769300,-60.2270900,0],
                    ["LOCATION_309",-25.0636700,-60.5772700,0],
                    ["LOCATION_310",-25.0627600,-60.5817500,1],
                    ["LOCATION_311",-25.0611900,-60.5672600,2],
                    ["LOCATION_312",-25.0602800,-60.5717300,1],
                    ["LOCATION_313",-25.0593700,-60.5762100,2],
                    ["LOCATION_314",-25.0584600,-60.5806900,1],
                    ["LOCATION_315",-25.0578100,-60.5617200,2],
                    ["LOCATION_316",-25.0575500,-60.5851700,2],
                    ["LOCATION_317",-25.0569000,-60.5662000,1],
                    ["LOCATION_318",-25.0559900,-60.5706700,0],
                    ["LOCATION_319",-25.0550800,-60.5751500,0],
                    ["LOCATION_320",-25.0541700,-60.5796200,1],
                    ["LOCATION_321",-25.0535200,-60.5606700,1],
                    ["LOCATION_322",-25.0530000,-59.8935000,2],
                    ["LOCATION_323",-25.0526100,-60.5651300,0],
                    ["LOCATION_324",-25.0517000,-60.5696100,1],
                    ["LOCATION_325",-25.0505200,-59.8843300,1],
                    ["LOCATION_326",-25.0501400,-60.5551500,1],
                    ["LOCATION_327",-25.0492300,-60.5596100,1],
                    ["LOCATION_328",-25.0483200,-60.5640800,0],
                    ["LOCATION_329",-25.0458500,-60.5540900,1],
                    ["LOCATION_330",-25.0449400,-60.5585500,1],
                    ["LOCATION_331",-25.0420000,-59.3778300,2],
                    ["LOCATION_332",-25.0415600,-60.5530300,0],
                    ["LOCATION_333",-25.0406500,-60.5575000,2],
                    ["LOCATION_334",-25.0397400,-60.5619600,0],
                    ["LOCATION_335",-25.0381900,-60.5475000,2],
                    ["LOCATION_336",-25.0379900,-59.3768800,2],
                    ["LOCATION_337",-25.0354500,-60.5609000,2],
                    ["LOCATION_338",-25.0348200,-60.5419800,1],
                    ["LOCATION_339",-25.0339000,-60.5464400,0],
                    ["LOCATION_340",-25.0329900,-60.5509000,2],
                    ["LOCATION_341",-25.0320700,-60.5553600,1],
                    ["LOCATION_342",-25.0305300,-60.5409200,0],
                    ["LOCATION_343",-25.0296200,-60.5453800,2],
                    ["LOCATION_344",-25.0287000,-60.5498400,1],
                    ["LOCATION_345",-25.0262500,-60.5398700,0],
                    ["LOCATION_346",-25.0253300,-60.5443200,0],
                    ["LOCATION_347",-25.0244100,-60.5487800,1],
                    ["LOCATION_348",-25.0219600,-60.5388100,2],
                    ["LOCATION_349",-25.0210400,-60.5432600,1],
                    ["LOCATION_350",-25.0201200,-60.5477200,2],
                    ["LOCATION_351",-25.0167500,-60.5422000,1],
                    ["LOCATION_352",-24.9562300,-59.6282900,0],
                    ["LOCATION_353",-24.9359800,-62.9481000,2],
                    ["LOCATION_354",-24.9345900,-62.9543300,2],
                    ["LOCATION_355",-24.9345600,-62.9608800,0],
                    ["LOCATION_356",-24.9331900,-62.9605500,1],
                    ["LOCATION_357",-24.9323200,-62.9470400,1],
                    ["LOCATION_358",-24.9310300,-62.9467600,0],
                    ["LOCATION_359",-24.9309600,-62.9532900,0],
                    ["LOCATION_360",-24.9296300,-62.9529900,0],
                    ["LOCATION_361",-24.9296100,-62.9595400,0],
                    ["LOCATION_362",-24.9282300,-62.9592300,0],
                    ["LOCATION_363",-24.9232700,-62.9579000,1],
                    ["LOCATION_364",-24.9210500,-62.9506000,2],
                    ["LOCATION_365",-24.9197200,-62.9503400,1],
                    ["LOCATION_366",-24.9196900,-62.9568600,0],
                    ["LOCATION_367",-24.9194900,-59.9924200,1],
                    ["LOCATION_368",-24.9186500,-59.9965900,1],
                    ["LOCATION_369",-24.9183300,-62.9631000,1],
                    ["LOCATION_370",-24.9183100,-62.9565700,0],
                    ["LOCATION_371",-24.9178200,-60.0007500,0],
                    ["LOCATION_372",-24.9169100,-62.9628100,0],
                    ["LOCATION_373",-24.9145000,-59.9955700,1],
                    ["LOCATION_374",-24.9120200,-59.9862400,0],
                    ["LOCATION_375",-24.9111800,-59.9904100,0],
                    ["LOCATION_376",-24.9070200,-59.9894000,2],
                    ["LOCATION_377",-24.6460300,-61.2975000,1],
                    ["LOCATION_378",-24.6450800,-61.2985600,1],
                    ["LOCATION_379",-24.6358100,-61.0714400,2],
                    ["LOCATION_380",-24.6348100,-61.0763000,0],
                    ["LOCATION_381",-24.6313500,-61.0703200,2],
                    ["LOCATION_382",-24.6122500,-62.0782400,1],
                    ["LOCATION_383",-24.5642000,-59.5142700,1],
                    ["LOCATION_384",-24.4434700,-59.9338600,2],
                    ["LOCATION_385",-24.4408700,-60.7125300,2],
                    ["LOCATION_386",-24.4399000,-60.7171800,0],
                    ["LOCATION_387",-24.4392900,-59.9328500,0],
                    ["LOCATION_388",-24.4325900,-59.9224500,2],
                    ["LOCATION_389",-24.4309300,-59.9308600,0],
                    ["LOCATION_390",-24.4300900,-59.9350500,1],
                    ["LOCATION_391",-24.4284200,-59.9214500,2],
                    ["LOCATION_392",-24.4269400,-62.7829600,2],
                    ["LOCATION_393",-24.4267400,-59.9298600,0],
                    ["LOCATION_394",-24.4259100,-59.9340500,0],
                    ["LOCATION_395",-24.4255600,-62.7891700,2],
                    ["LOCATION_396",-24.4242300,-59.9204400,2],
                    ["LOCATION_397",-24.4241700,-62.7953900,0],
                    ["LOCATION_398",-24.4229900,-62.7811100,0],
                    ["LOCATION_399",-24.4223700,-60.8015800,1],
                    ["LOCATION_400",-24.4219800,-62.7816500,1],
                    ["LOCATION_401",-24.4216400,-62.7873400,1],
                    ["LOCATION_402",-24.4213900,-60.8063000,0],
                    ["LOCATION_403",-24.4206000,-62.7878600,2],
                    ["LOCATION_404",-24.4204100,-60.8110300,2],
                    ["LOCATION_405",-24.4203000,-62.7935600,2],
                    ["LOCATION_406",-24.4201800,-60.7987600,2],
                    ["LOCATION_407",-24.4192200,-60.8035000,0],
                    ["LOCATION_408",-24.4192100,-62.7940700,1],
                    ["LOCATION_409",-24.4189500,-60.7957600,1],
                    ["LOCATION_410",-24.4182700,-60.8082400,2],
                    ["LOCATION_411",-24.4179700,-60.8004900,1],
                    ["LOCATION_412",-24.4173200,-60.8129600,2],
                    ["LOCATION_413",-24.4166800,-62.7860100,2],
                    ["LOCATION_414",-24.4160000,-60.8099300,2],
                    ["LOCATION_415",-24.4157700,-60.7976700,0],
                    ["LOCATION_416",-24.4150100,-60.8146400,1],
                    ["LOCATION_417",-24.4145500,-60.7946900,1],
                    ["LOCATION_418",-24.4138700,-60.8071300,2],
                    ["LOCATION_419",-24.4135600,-60.7994200,2],
                    ["LOCATION_420",-24.4129200,-60.8118500,0],
                    ["LOCATION_421",-24.4125800,-60.8041300,0],
                    ["LOCATION_422",-24.4119600,-60.8166000,0],
                    ["LOCATION_423",-24.4115900,-60.8088400,2],
                    ["LOCATION_424",-24.4113700,-60.7965700,0],
                    ["LOCATION_425",-24.4106100,-60.8135600,0],
                    ["LOCATION_426",-24.4104100,-60.8013100,0],
                    ["LOCATION_427",-24.4101400,-60.7936000,1],
                    ["LOCATION_428",-24.4096200,-60.8182900,2],
                    ["LOCATION_429",-24.4094600,-60.8060300,1],
                    ["LOCATION_430",-24.4091600,-60.7983200,1],
                    ["LOCATION_431",-24.4085100,-60.8107600,2],
                    ["LOCATION_432",-24.4081700,-60.8030500,1],
                    ["LOCATION_433",-24.4075500,-60.8155000,0],
                    ["LOCATION_434",-24.4071800,-60.8077600,1],
                    ["LOCATION_435",-24.4066000,-60.8202400,1],
                    ["LOCATION_436",-24.4062000,-60.8124700,0],
                    ["LOCATION_437",-24.4052100,-60.8172000,2],
                    ["LOCATION_438",-24.4031400,-60.8144000,0],
                    ["LOCATION_439",-24.4021800,-60.8191400,2],
                    ["LOCATION_440",-24.3539100,-61.2191300,2],
                    ["LOCATION_441",-24.3389000,-60.3905300,1],
                    ["LOCATION_442",-24.3380000,-60.3950200,0],
                    ["LOCATION_443",-24.3345900,-60.3894900,0],
                    ["LOCATION_444",-24.3336900,-60.3939700,0],
                    ["LOCATION_445",-24.3302900,-60.3884500,0],
                    ["LOCATION_446",-24.3293800,-60.3929100,1],
                    ["LOCATION_447",-24.3250800,-60.3918700,1],
                    ["LOCATION_448",-24.2471100,-60.3047400,1],
                    ["LOCATION_449",-24.2462200,-60.3091800,1],
                    ["LOCATION_450",-24.0828100,-62.5072300,1],
                    ["LOCATION_451",-24.0625400,-60.4321300,1],
                    ["LOCATION_452",-24.0616000,-60.4366800,2],
                    ["LOCATION_453",-24.0572600,-60.4356200,2],
                    ["LOCATION_454",-24.0535200,-60.4538100,1],
                    ["LOCATION_455",-24.0534700,-60.4548500,1],
                    ["LOCATION_456",-24.0525800,-60.4583700,1],
                    ["LOCATION_457",-24.0525600,-60.4594300,2],
                    ["LOCATION_458",-24.0516500,-60.4640000,1],
                    ["LOCATION_459",-24.0516400,-60.4629300,2],
                    ["LOCATION_460",-24.0507400,-60.4685700,1],
                    ["LOCATION_461",-24.0507000,-60.4674900,1],
                    ["LOCATION_462",-24.0482300,-60.4573000,0],
                    ["LOCATION_463",-24.0482200,-60.4583500,0],
                    ["LOCATION_464",-24.0473100,-60.4629200,2],
                    ["LOCATION_465",-24.0473000,-60.4618600,1],
                    ["LOCATION_466",-23.5157900,-61.5724600,2],
                    ["LOCATION_467",-23.0371400,-63.3156100,2],
                    ["LOCATION_468",-23.0318800,-63.3142000,0],
                    ["LOCATION_469",-33.2588100,-60.2871700,1],
                    ["LOCATION_470",-33.2551300,-60.2862100,2],
                    ["LOCATION_471",-31.3929700,-67.3224100,1],
                    ["LOCATION_472",-31.3876400,-67.3199500,1],
                    ["LOCATION_473",-31.3866000,-67.3240200,0],
                    ["LOCATION_474",-31.3855500,-67.3281600,0],
                    ["LOCATION_475",-31.0428700,-64.1074100,1],
                    ["LOCATION_476",-31.0369300,-64.1116400,0],
                    ["LOCATION_477",-28.5794200,-56.0771600,0],
                    ["LOCATION_478",-28.0898100,-61.9796600,0],
                    ["LOCATION_479",-28.0881700,-61.9779500,1],
                    ["LOCATION_480",-28.0385900,-59.4414600,1],
                    ["LOCATION_481",-27.8374700,-60.7382600,1],
                    ["LOCATION_482",-27.8366200,-60.7424200,2],
                    ["LOCATION_483",-27.5423600,-55.8731800,0],
                    ["LOCATION_484",-27.4545500,-61.0086600,1],
                    ["LOCATION_485",-27.3988600,-59.6571700,0],
                    ["LOCATION_486",-27.2732400,-59.7008100,1],
                    ["LOCATION_487",-27.2693200,-59.6998400,0],
                    ["LOCATION_488",-27.2490700,-60.8173200,0],
                    ["LOCATION_489",-27.2449800,-60.8179400,2],
                    ["LOCATION_490",-27.2449000,-60.8162500,0],
                    ["LOCATION_491",-27.1654000,-60.2420200,2],
                    ["LOCATION_492",-27.1629800,-60.2540200,2],
                    ["LOCATION_493",-27.1613500,-60.2410000,2],
                    ["LOCATION_494",-27.1605500,-60.2450000,1],
                    ["LOCATION_495",-27.1589300,-60.2530100,1],
                    ["LOCATION_496",-27.1581200,-60.2570000,0],
                    ["LOCATION_497",-27.1548800,-60.2519800,1],
                    ["LOCATION_498",-27.1540700,-60.2559900,0],
                    ["LOCATION_499",-27.1160900,-60.9305000,2],
                    ["LOCATION_500",-27.1142100,-60.9275300,0],
                    ["LOCATION_501",-27.1133300,-60.9319200,0],
                    ["LOCATION_502",-27.1118800,-60.9294200,1],
                    ["LOCATION_503",-27.1109700,-60.9338000,1],
                    ["LOCATION_504",-27.1100000,-60.9264400,1],
                    ["LOCATION_505",-27.1091200,-60.9308300,1],
                    ["LOCATION_506",-27.1085800,-60.9239800,1],
                    ["LOCATION_507",-27.1076700,-60.9283400,1],
                    ["LOCATION_508",-27.1057900,-60.9253500,1],
                    ["LOCATION_509",-27.1049100,-60.9297300,1],
                    ["LOCATION_510",-27.0699800,-60.6243800,1],
                    ["LOCATION_511",-27.0697900,-60.6272600,1],
                    ["LOCATION_512",-27.0691400,-60.6286000,2],
                    ["LOCATION_513",-27.0656500,-60.6262000,2],
                    ["LOCATION_514",-26.8467700,-61.1050500,1],
                    ["LOCATION_515",-26.7859300,-61.3357800,0],
                    ["LOCATION_516",-26.7849700,-61.3404600,1],
                    ["LOCATION_517",-26.7815900,-61.3346500,1],
                    ["LOCATION_518",-26.7806300,-61.3393100,0],
                    ["LOCATION_519",-26.7467000,-61.4145100,2],
                    ["LOCATION_520",-26.7457200,-61.4192300,2],
                    ["LOCATION_521",-26.7364500,-63.9690900,1],
                    ["LOCATION_522",-26.7349400,-63.9757700,1],
                    ["LOCATION_523",-26.7341800,-63.9791100,0],
                    ["LOCATION_524",-26.7321600,-63.9642900,0],
                    ["LOCATION_525",-26.7314000,-63.9676300,1],
                    ["LOCATION_526",-26.6999600,-62.9736800,2],
                    ["LOCATION_527",-26.6929800,-60.5467300,2],
                    ["LOCATION_528",-26.6921200,-60.5509500,0],
                    ["LOCATION_529",-26.5773800,-62.6525000,1],
                    ["LOCATION_530",-26.5714500,-62.6568100,2],
                    ["LOCATION_531",-26.5377900,-61.6878500,0],
                    ["LOCATION_532",-26.4498000,-62.2326300,0],
                    ["LOCATION_533",-26.4486600,-62.2379500,0],
                    ["LOCATION_534",-26.4475100,-62.2432700,0],
                    ["LOCATION_535",-26.4452000,-62.2313900,2],
                    ["LOCATION_536",-26.4440500,-62.2367100,2],
                    ["LOCATION_537",-26.3839400,-60.7394900,2],
                    ["LOCATION_538",-26.3402800,-60.8676200,2],
                    ["LOCATION_539",-26.3360300,-60.8665300,1],
                    ["LOCATION_540",-26.3284100,-60.8599200,2],
                    ["LOCATION_541",-26.3275000,-60.8643800,1],
                    ["LOCATION_542",-26.2886200,-61.3171800,0],
                    ["LOCATION_543",-26.2656400,-60.4364700,0],
                    ["LOCATION_544",-26.1831900,-60.6976200,0],
                    ["LOCATION_545",-26.1820700,-59.2283900,0],
                    ["LOCATION_546",-26.1808500,-60.6996200,2],
                    ["LOCATION_547",-26.1012500,-60.4749300,2],
                    ["LOCATION_548",-26.0970700,-60.4738700,2],
                    ["LOCATION_549",-26.0659700,-61.4923000,2],
                    ["LOCATION_550",-26.0615200,-61.4911500,0],
                    ["LOCATION_551",-26.0573200,-60.3881300,0],
                    ["LOCATION_552",-26.0564600,-60.3923600,0],
                    ["LOCATION_553",-26.0540000,-60.3828700,2],
                    ["LOCATION_554",-26.0531500,-60.3870900,1],
                    ["LOCATION_555",-26.0432700,-61.0981400,2],
                    ["LOCATION_556",-26.0389200,-61.0970400,1],
                    ["LOCATION_557",-26.0379700,-61.1016800,1],
                    ["LOCATION_558",-26.0345800,-61.0959200,0],
                    ["LOCATION_559",-26.0336200,-61.1005600,0],
                    ["LOCATION_560",-26.0292800,-61.0994500,2],
                    ["LOCATION_561",-26.0111100,-61.6184300,0],
                    ["LOCATION_562",-26.0100500,-61.6234100,2],
                    ["LOCATION_563",-26.0066300,-61.6172800,0],
                    ["LOCATION_564",-25.9361200,-65.6244200,2],
                    ["LOCATION_565",-25.9321500,-65.6157500,2],
                    ["LOCATION_566",-25.9316600,-61.2456600,2],
                    ["LOCATION_567",-25.9312300,-65.6195800,2],
                    ["LOCATION_568",-25.9303700,-65.6231800,2],
                    ["LOCATION_569",-25.9282500,-61.2397800,0],
                    ["LOCATION_570",-25.9272700,-65.6108900,2],
                    ["LOCATION_571",-25.9272700,-61.2445300,2],
                    ["LOCATION_572",-25.9262900,-65.6149800,2],
                    ["LOCATION_573",-25.9232600,-59.3956400,0],
                    ["LOCATION_574",-25.9232300,-58.9599200,2],
                    ["LOCATION_575",-25.9221600,-59.4012600,2],
                    ["LOCATION_576",-25.9214600,-65.6099500,1],
                    ["LOCATION_577",-25.9191600,-60.3165400,0],
                    ["LOCATION_578",-25.9150000,-60.3155100,1],
                    ["LOCATION_579",-25.7600100,-61.1317400,2],
                    ["LOCATION_580",-25.7590300,-61.1283300,0],
                    ["LOCATION_581",-25.7580400,-61.1330200,0],
                    ["LOCATION_582",-25.7575500,-61.1212100,2],
                    ["LOCATION_583",-25.7565900,-61.1259200,2],
                    ["LOCATION_584",-25.7556400,-61.1225200,2],
                    ["LOCATION_585",-25.7556300,-61.1306200,0],
                    ["LOCATION_586",-25.7546500,-61.1272100,2],
                    ["LOCATION_587",-25.7531700,-61.1201000,2],
                    ["LOCATION_588",-25.7488000,-61.1189700,2],
                    ["LOCATION_589",-25.6950700,-60.6242100,0],
                    ["LOCATION_590",-25.6908200,-60.6231400,0],
                    ["LOCATION_591",-25.6865700,-60.6220800,1],
                    ["LOCATION_592",-25.5661000,-64.5830200,2],
                    ["LOCATION_593",-25.5652000,-64.5868400,1],
                    ["LOCATION_594",-25.5598100,-64.5853900,0],
                    ["LOCATION_595",-25.4374300,-64.2224300,0],
                    ["LOCATION_596",-25.4366000,-64.2260200,0],
                    ["LOCATION_597",-25.4307600,-64.2511200,1],
                    ["LOCATION_598",-25.4254500,-64.2497300,0],
                    ["LOCATION_599",-25.3008600,-64.6606000,0],
                    ["LOCATION_600",-25.2999400,-64.6645500,2],
                    ["LOCATION_601",-25.2995900,-64.6633100,0],
                    ["LOCATION_602",-25.2976400,-63.6896800,0],
                    ["LOCATION_603",-25.2968800,-63.6930800,1],
                    ["LOCATION_604",-25.2961200,-63.6965000,1],
                    ["LOCATION_605",-25.2953600,-63.6998900,0],
                    ["LOCATION_606",-25.2945900,-63.7033100,2],
                    ["LOCATION_607",-25.2938300,-63.7067100,2],
                    ["LOCATION_608",-25.2917500,-63.6916400,0],
                    ["LOCATION_609",-25.2909800,-63.6950500,1],
                    ["LOCATION_610",-25.2902200,-63.6984600,2],
                    ["LOCATION_611",-25.1526300,-63.9004600,2],
                    ["LOCATION_612",-25.1518400,-63.9039900,2],
                    ["LOCATION_613",-25.1509300,-63.8990600,1],
                    ["LOCATION_614",-25.1501200,-63.9025800,1],
                    ["LOCATION_615",-25.1493000,-63.9061000,2],
                    ["LOCATION_616",-25.1474200,-63.8990000,0],
                    ["LOCATION_617",-25.1466200,-63.9025300,2],
                    ["LOCATION_618",-25.1458300,-63.9060600,1],
                    ["LOCATION_619",-25.0151400,-64.0255700,1],
                    ["LOCATION_620",-25.0143200,-64.0291700,0],
                    ["LOCATION_621",-25.0135100,-64.0327700,2],
                    ["LOCATION_622",-25.0128200,-64.0243500,0],
                    ["LOCATION_623",-25.0127000,-64.0363800,0],
                    ["LOCATION_624",-25.0119900,-64.0279400,0],
                    ["LOCATION_625",-25.0111500,-64.0315400,0],
                    ["LOCATION_626",-25.0103100,-64.0351400,2],
                    ["LOCATION_627",-25.0098700,-64.0240700,2],
                    ["LOCATION_628",-25.0090600,-64.0276700,0],
                    ["LOCATION_629",-25.0082500,-64.0312700,0],
                    ["LOCATION_630",-25.0074300,-64.0348700,2],
                    ["LOCATION_631",-24.9570300,-64.0590800,1],
                    ["LOCATION_632",-24.9562000,-64.0627100,1],
                    ["LOCATION_633",-37.6869200,-69.0780300,1],
                    ["LOCATION_634",-37.6818000,-69.0758800,0],
                    ["LOCATION_635",-37.4775500,-69.1348800,1],
                    ["LOCATION_636",-37.0392900,-60.2950100,1],
                    ["LOCATION_637",-36.9914100,-60.2762100,1],
                    ["LOCATION_638",-36.9254200,-60.1591800,1],
                    ["LOCATION_639",-34.9515100,-57.9908300,1],
                    ["LOCATION_640",-34.8594200,-57.8936500,0],
                    ["LOCATION_641",-34.8560600,-57.8928300,0],
                    ["LOCATION_642",-34.7502300,-58.3097600,1],
                    ["LOCATION_643",-34.7453400,-58.3176700,1],
                    ["LOCATION_644",-34.1499800,-58.9877900,2],
                    ["LOCATION_645",-38.4299300,-69.0096100,1],
                    ["LOCATION_646",-38.3599400,-68.7411700,2],
                    ["LOCATION_647",-38.3589700,-68.7449500,1],
                    ["LOCATION_648",-38.3340100,-69.0567100,2],
                    ["LOCATION_649",-38.3336700,-69.0579100,0],
                    ["LOCATION_650",-38.3329900,-69.0605900,2],
                    ["LOCATION_651",-38.2929700,-68.7187000,1],
                    ["LOCATION_652",-38.2757800,-68.7001400,0],
                    ["LOCATION_653",-38.2748300,-68.7038500,1],
                    ["LOCATION_654",-38.2707700,-68.6982900,2],
                    ["LOCATION_655",-38.2698200,-68.7019900,2],
                    ["LOCATION_656",-38.0852000,-68.7072800,0],
                    ["LOCATION_657",-25.9187900,-65.6392700,1],
                    ["LOCATION_658",-25.9185500,-65.6433200,1],
                    ["LOCATION_659",-25.9170600,-65.6380200,2],
                    ["LOCATION_660",-25.9167900,-65.6420600,1],
                    ["LOCATION_661",-25.9120200,-65.6394600,0],
                    ["LOCATION_662",-25.9118200,-65.6427800,1],
                    ["LOCATION_663",-25.9102700,-65.6383000,2],
                    ["LOCATION_664",-25.9100500,-65.6417200,2],
                    ["LOCATION_665",-25.9052900,-65.6388500,1],
                    ["LOCATION_666",-25.1525900,-63.9031500,1],
                    ["LOCATION_667",-25.1519700,-63.8997500,1],
                    ["LOCATION_668",-25.1452400,-63.9026400,0],
                    ["LOCATION_669",-25.1446200,-63.8992100,1],
                    ["LOCATION_670",-25.0129100,-64.0224200,1],
                    ["LOCATION_671",-25.0124600,-64.0304400,1],
                    ["LOCATION_672",-25.0120200,-64.0384400,1],
                    ["LOCATION_673",-24.9597000,-64.0590200,0],
                    ["LOCATION_674",-31.3854800,-67.3289300,2],
                    ["LOCATION_675",-31.3852100,-67.3258400,0],
                    ["LOCATION_676",-31.3848900,-67.3320500,0],
                    ["LOCATION_677",-29.9512100,-69.3250800,1],
                    ["LOCATION_678",-29.9455300,-69.3248000,2],
                    ["LOCATION_679",-38.8165700,-67.7579000,2],
                    ["LOCATION_680",-38.4318800,-69.0089100,2],
                    ["LOCATION_681",-38.4257000,-69.0085400,2],
                    ["LOCATION_682",-38.3632300,-68.7390100,0],
                    ["LOCATION_683",-38.3630300,-68.7446700,2],
                    ["LOCATION_684",-38.3567400,-68.7452000,2],
                    ["LOCATION_685",-38.3419900,-68.4244900,2],
                    ["LOCATION_686",-38.3332600,-69.0525100,0],
                    ["LOCATION_687",-38.3330500,-69.0583300,2],
                    ["LOCATION_688",-38.2767100,-68.6961600,2],
                    ["LOCATION_689",-38.2765200,-68.7023700,2],
                    ["LOCATION_690",-38.2733300,-68.6965900,1],
                    ["LOCATION_691",-38.2731100,-68.7027800,1],
                    ["LOCATION_692",-37.4816800,-69.1345200,0],
                    ["LOCATION_693",-37.4755900,-69.1336700,1]

                ];
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
                    'Mapa Polico': focos,
                    'Mapa Fisico': clima,
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
