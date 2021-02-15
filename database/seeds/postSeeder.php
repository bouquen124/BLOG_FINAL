<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')->insert([
            'user_id' => 1,
            'estado_id' => 1,
            'titulo' => 'Cómo la tecnología definirá el mundo post Covid-19',
            'subtitulo' => 'Cambios climaticos',
            'contenido' => 'Uno de los pocos aspectos positivos de la pandemia del nuevo coronavirus Covid-19 es que ha impulsado la digitalización. Aunque se hecho a marchas forzadas y tomando atajos que de otra manera no hubiera sido posible, las medidas de confinamiento y distanciamiento social implantados como defensa contra los contagios ha revelado la importancia de algunas tecnologías ya existentes que han cobrado aún más relevancia. El comercio electrónico, la robótica asistencial, el teletrabajo o la monitorización en tiempo real de la salud son áreas que, según los expertos, se extenderán aún más en las sociedades avanzadas.
            https://www.abc.es/tecnologia/informatica/soluciones/abci-como-tecnologia-definira-mundo-post-covid-19-202005110158_noticia.html?ref=https:%2F%2Fwww.google.com%2F
            ',
            'created_at' => Carbon::now()
        ]);


///////////////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Las 25 nuevas tecnologías que triunfarán entre 2015-2020.',
    'subtitulo' => 'Ti reportajes',
    'contenido' => 'Los que trabajamos en el mundo de las empresas de internet, a veces olvidamos que existen otras nuevas tecnologías que van a ser vitales en los próximos años y que están muy relacionadas con internet porque al final, todo converge.
    https://www.mujeresconsejeras.com/las-25-nuevas-tecnologias-que-triunfaran-entre-2015-2020/',
    'created_at' => Carbon::now()
]);

////////////////////////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'El cambio climático avanza implacablemente a pesar de la pandemia COVID-19, advierten los científicos',
    'subtitulo' => 'Cambio climático y medioambiente',
    'contenido' => 'El mundo está muy lejos de cumplir los objetivos del Acuerdo de París. Las reducciones de emisiones de carbón en el punto máximo de las medidas de confinamiento por el coronavirus alcanzaron hasta un 17%, pero ya se acercan de nuevo a los niveles previos a la pandemia y a largo plazo no tendrán mucho impacto en las concentraciones de gases de efecto invernadero en la atmósfera, que permanecen en niveles récord. La temperatura sigue aumentando y el agua y los ecosistemas están cada vez más amenazados.
    https://news.un.org/es/story/2020/09/1480142',
    'created_at' => Carbon::now()
]);
///////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Paz, dignidad e igualdad en un planeta sano',
    'subtitulo' => 'Cambio climático',
    'contenido' => 'Nos encontramos en un momento decisivo para afrontar con éxito el mayor desafío de nuestro tiempo: el cambio climático.
     Cada día, en diferentes puntos de la geografía mundial, el planeta nos manda mensajes sobre las enormes transformaciones que está sufriendo: desde cambiantes pautas meteorológicas que amenazan la producción de alimentos; hasta el aumento del nivel del mar que incrementa el riesgo de inundaciones catastróficas.
    Los efectos del cambio climático nos afectan a todos. Si no se toman medidas drásticas desde ya, será mucho más difícil y costoso adaptarse a sus efectos en el futuro
    https://www.un.org/es/sections/issues-depth/climate-change/index.html',
    'created_at' => Carbon::now()
]);
////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Medidas contra la reventa de PS5 en Japón: La tienda de Akihabara no venderá a especuladores',
    'subtitulo' => 'Ps5',
    'contenido' => 'El pasado fin de semana la tienda Yodobashi Camera, del barrio japonés de Akihabara, puso a la venta una serie de unidades de PS5 de manera presencial sin necesidad de reserva previa: lo que comenzó siendo una cola de compradores civilizada se convirtió en caos y locura cuando los empleados de la tienda comenzaron a repartir los tickets. Tras cancelar la venta, Yodobashi Camera repetirá la jugada con medidas más estrictas para evitar aglomeraciones y, sobre todo, la presencia de especuladores.
    https://vandal.elespanol.com/noticia/1350741477/medidas-contra-la-reventa-de-ps5-en-japon-la-tienda-de-akihabara-no-vendera-a-especuladores/',
    'created_at' => Carbon::now()
]);

//////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Xbox Series X, análisis: su soberbio hardware está al servicio de una experiencia que nos anticipa una competencia encarnizada',
    'subtitulo' => 'JOHN TONES Y JUAN CARLOS LÓPEZ ',
    'contenido' => 'Durante los últimos meses la división Xbox de Microsoft no ha dado una sola puntada sin hilo. Aquella sección titubeante que tantas dudas y críticas suscitó en 2013, durante los primeros pasos de Xbox One, ha sido barrida sin contemplaciones para apostar por el despliegue de un ecosistema que pretende ponérnoslo más fácil a los jugadores, y no más difícil. Qué diferente es, afortunadamente, el equipo Xbox astutamente dirigido por Phil Spencer de aquel tan poco acertado gobernado por Don Mattrick.
    https://www.xataka.com/analisis/xbox-series-x-analisis-caracteristicas-precio-especificaciones',
    'created_at' => Carbon::now()
]);

//////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'El inicio de una nueva generación: PS5 ya casi llega',
    'subtitulo' => 'Ya estamos acá: PS5 finalmente se lanzará',
    'contenido' => 'Qué año. Quiero agradecerles a todos ustedes desde lo más profundo de mi corazón por alentarnos y mantenernos honestos. Sé que hablo por todos en Sony Interactive Entertainment cuando digo que ustedes están en el centro de todo lo que creamos y hacemos acá.Nunca vacilamos en nuestra visión por entregar una verdadera consola de próxima generación que se construyó para entusiasmar a jugadores y desarrolladores. También sabíamos que sería casi imposible para los jugadores y la prensa experimentar funciones de próxima generación como la respuesta háptica del control inalámbrico DualSense, o nuestro audio 3D inmersivo, en un mundo socialmente distanciado.
    https://blog.latam.playstation.com/2020/11/11/el-inicio-de-una-nueva-generacion-ps5-ya-casi-llega/',
    'created_at' => Carbon::now()
]);
//////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Anunciado un mando oficial de Apex Legends para Nintendo Switch: precio y reserva disponibles',
    'subtitulo' => 'Alberto Millán',
    'contenido' => 'mismo se ha anunciado uno con licencia oficial de Apex Legends.
    Se trata de un mando Pro de PowerA que tiene licencia oficial de la marca y que se lanzará mañana 3 de febrero. Los fans ya pueden reservarlo en Amazon si están interesados.
    Libertad inalámbrica con Bluetooth 5.0
    Cuenta con controles de movimiento y botones de juego avanzados asignables
    Diseño ergonómico con diseño de botones estándar
    Leds para número de jugador, asignación de botones y advertencia de batería baja
    Incluye dos baterías AA para hasta 30 horas de juego
    https://www.nintenderos.com/2021/02/anunciado-un-mando-oficial-de-apex-legends-para-nintendo-switch-precio-y-reserva-disponibles/',
    'created_at' => Carbon::now()
]);
///////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Se filtran imágenes de Resident Evil 8 en sus primeras fases de desarrollo',
    'subtitulo' => 'Cristian Bustamante ',
    'contenido' => 'Se filtran imágenes de Resident Evil 8 en sus primeras fases de desarrollo. La franquicia estrella de Capcom regresará más fuerte que nunca a Xbox Series X|S, PC y PlayStation 5, aunque Resident Evil 8 Village también podría llegar a Xbox One y PS4 según afirmó un insider hace varios meses. Los rumores y filtraciones de Resident Evil 8 continúan apareciendo, esta vez de forma desbordante y a su vez peligrosa, ya que podrían ser spoilers para muchos de vosotros, arruinándoos la futura experiencia de juego.
    https://www.somosxbox.com/imagenes-de-resident-evil-8-en-sus-primeras-fases-de-desarrollo/885353',
    'created_at' => Carbon::now()
]);
///////////////////////////////////////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Japón se une a la lista: prohibirá los autos con motor de combustión interna para 2030',
    'subtitulo' => 'MARCOS BUREAU',
    'contenido' => 'Japón busca reducir lo más rápido posible su cantidad de emisiones de carbono, buscando que para 2050 puedan tener una nación completamente neutra en emisiones contaminantes y para conseguirlo uno de los puntos clave sería la prohibición de autos con motor de combustión interna para el año 2030.
    https://www.motorpasion.com.mx/industria/japon-prohibira-autos-motor-combustion-interna-para-2030    ',
    'created_at' => Carbon::now()
]);


////////////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Anatomía de un coche eléctrico: su sencilla mecánica, al desnudo',
    'subtitulo' => 'DANIEL MURIAS',
    'contenido' => 'Tras más de un siglo de historia, parece ser que ahora sí, el coche eléctrico se impondrá. Cada vez son más lo fabricantes tradicionales que tienen uno o más en su gama -y los que todavía no tienen al menos un coche eléctrico en su gama, lo tendrán en menos de dos años-. Aunque todavía queda camino por recorrer para que se imponga realmente, cada vez son más y es hora de saber cómo son y cómo funcionan.
    motorpasion.com/coches-hibridos-alternativos/anatomia-coche-electrico-su-sencilla-mecanica-al-desnudo',
    'created_at' => Carbon::now()
]);

////////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Nanotecnología para el medio ambiente. Eliminación de contaminantes mediante nanomateriales',
    'subtitulo' => 'Xavier Font, Amanda Alonso',
    'contenido' => 'Se muestran en este artículo algunas de las oportunidades que presenta la nanotecnología en el campo de la ingeniería ambiental. Concretamente, se focaliza en el uso de nanopartículas para la eliminación de contaminantes en medio acuoso, en gases y en suelos. Finalmente, se analiza brevemente la interacción de los nanomateriales con el medio ambiente.
    https://www.industriaquimica.es/articulos/20140708/nanotecnologia-medio-ambiente-eliminacion-contaminantes-mediante-nanomateriales#.YBm8cehKi70    ',
    'created_at' => Carbon::now()
]);
/////////////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Nanobots para curar el cáncer',
    'subtitulo' => 'Nanotecnologia',
    'contenido' => 'La ciencia y la tecnología son conceptos que jamás van a poder separarse. Afortunadamente para la primera y su desarrollo, pero también para los seres humanos, es la increíble evolución que la segunda está permitiendo avances que parecen de ciencia ficción. Una de las disciplinas científicas donde más se deja ver el uso de la tecnología es en la medicina, donde entre sus últimos desarrollos se encuentra el uso de nanobots para combatir enfermedades como el cáncer.
     Los expertos han conseguido fabricar robots diminutos que pueden viajar por el interior del cuerpo sin generar problemas al organismo; de hecho, su función es la contraria, protegerlo combatiendo contra virus que le estén atacando. Uno de estas enfermedades en cuya lucha el uso de los nanobots puede ser decisivo es el cáncer.
     https://blogs.imf-formacion.com/blog/tecnologia/nanobots-curar-cancer-201711/',
     'created_at' => Carbon::now()

]);
//////////////////////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Ni diesel ni etanol: Estos son los combustibles más raros y alternativos para autos',
    'subtitulo' => 'ESTEFANÍA TRUJILLO',
    'contenido' => '¿Cuántas veces hemos visto en las películas autos voladores, autos invisibles o incluso autos que se mueven con basura? Parece ser que estos modelos de fantasía han servido de inspiración en la vida real para darle vida a vehículos fuera de lo común.
    Precisamente, así como el Delorean en Back to the Future II, existen en el mundo combustibles fuera de lo común que han impulsado a uno que otro vehículo, que si bien solo han sido proyectos, los creadores han logrado que funcionen.
    https://www.motorpasion.com.mx/industria/diesel-etanol-estos-combustibles-raros-alternativos-para-autos',
    'created_at' => Carbon::now()
]);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Visión artificial industrial: aplicaciones y sectores',
    'subtitulo' => 'Imagen y visión artificia',
    'contenido' => 'La visión artificial son el conjunto de herramientas y métodos que permiten obtener, procesar y analizar imágenes del mundo real con la finalidad de puedan ser tratadas por un ordenador. Esto permite automatizar una amplia gama de tareas al aportar a las máquinas la información que necesitan para la toma de decisiones correctas en cada una de las tareas que les han sido asignadas.
    https://blog.infaimon.com/vision-artificial-industrial-aplicaciones-y-sectores/',
    'created_at' => Carbon::now()
]);
//////////////////////////////////16///////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'La última década y el futuro del impacto de la IA en la sociedad',
    'subtitulo' => 'Joanna J. Bryson',
    'contenido' => 'La inteligencia artificial (IA) es una expresión técnica referida a artefactos empleados para detectar contextos o llevar a cabo acciones en respuesta a contextos detectados.
    https://www.bbvaopenmind.com/articulos/la-ultima-decada-y-el-futuro-del-impacto-de-la-ia-en-la-sociedad/',
    'created_at' => Carbon::now()
]);
///////////////////////////17///////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Actualización Fortnite 15.30 - Notas del Parche; nuevas armas exóticas, Contrato de Mando...',
    'subtitulo' => 'Rubén Martínez ',
    'contenido' => 'El parche 15.30 de Fortnite llegó el martes 2 de febrero de 2021 y trajo consigo numerosos cambios y novedades. A continuación os contamos cuáles son las mejoras más importantes de esta nueva actualización de contenido de la Temporada 5 del Pase de Batalla de Fortnite Capítulo 2, como el nuevo modo El Contrato de Mando
    https://as.com/meristation/2021/02/02/noticias/1612254895_470548.html',
    'created_at' => Carbon::now()
]);

////////////////////////////////////18///////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Coronavirus: El CSIC investiga en biotecnología, nanotecnología y demografía',
    'subtitulo' => ' Mario Ruiz',
    'contenido' => 'La directora del CSIC, Rosa Menéndez, ha trasladado su agradecimiento a la sociedad por la confianza de la sociedad en la ciencia. A este respecto, ha informado de las iniciativas que el organismo está llevando acabo en coordinación con el Ejecutivo y las CC.AA. “Los graves problemas que afronta nuestra sociedad requieren, hoy más que nunca, equipos de investigación que puedan abordarlos de forma coordinada y contando con el conocimiento, la experiencia y los recursos necesarios para ello”, ha señalado en un comunicado.
    https://gacetamedica.com/investigacion/coronavirus-el-csic-investiga-en-biotecnologia-nanotecnologia-y-demografia/',
    'created_at' => Carbon::now()
]);

//////////////////////////////////////19///////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Así usas la inteligencia artificial cada día sin darte cuenta',
    'subtitulo' => 'BrandLab',
    'contenido' => 'Lejos de ser algo que solo pueda encontrarse en las películas de ciencia ficción, la inteligencia artificial está muy presente en tu día a día. Así usas la inteligencia artificial cada día sin darte cuenta.
    Muchas veces cuando pensamos en inteligencia artificial nos vienen a la mente imágenes de películas como Yo, Robot, Blade Runner o 2001 Odisea en el espacio, en la que máquinas inteligentes disputan la hegemonía del ser humano.
    https://computerhoy.com/patrocinado/tecnologia/usas-inteligencia-artificial-cada-dia-darte-cuenta-370251',
    'created_at' => Carbon::now()
]);
//////////////////////////////////////////20/////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Así será el 6G, la tecnología que impulsará la revolución de la IA',
    'subtitulo' => 'Computación',
    'contenido' => 'Mientras las redes 5G se implementan en diferentes partes del mundo, ya se planean las potencialidades de la próxima generación. Un equipo de investigadores defiende que el futuro 6G permitirá que diferentes agentes de IA colaboren: por ejemplo, los coches autónomos se coordinarán para mejorar sus rutas
    https://www.technologyreview.es/s/11103/asi-sera-el-6g-la-tecnologia-que-impulsara-la-revolucion-de-la-ia',
    'created_at' => Carbon::now()
]);
////////////////////////////////////////////21////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Revolución tecnológica POST-COVID',
    'subtitulo' => 'Covid19',
    'contenido' => 'Este año 2020, totalmente condicionado por la pandemia del Covid-19, ha acelerado de forma inesperada el desarrollo de muchas nuevas tecnologías que parecía que tardarían años en imponerse, este fenómeno ha resultado especialmente notorio en los últimos meses.
    Tras los primeros tres meses de pandemia, llenos de confusión y pánico y en los aparentemente todo se detenía y que ninguna empresa pensaba en hacer proyectos, el mes de junio trajo un cambio de mentalidad en las empresas que pasaron del total pesimismo a un cierto posibilismo e incluso en muchos casos los empresarios optaron por el rupturismo tecnológico para preparar el futuro a conciencia.
    https://www.im-projects.com/revolucion-tecnologica-post-covid/',
    'created_at' => Carbon::now()
]);
//////////////////////////////////////////22//////////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'La venta abruma a GameStop y otras acciones favorecidas por Reddit',
    'subtitulo' => 'Reuters ',
    'contenido' => 'Las acciones de GameStop Corp se redujeron a la mitad el valor el martes y los precios de la plata retrocedieron cuando el frenesí comercial impulsado por Reddit que ha conmocionado a los mercados financieros mundiales pareció desvanecerse, al menos por ahora.
    reuters.com/article/us-retail-trading/selling-overwhelms-gamestop-and-other-reddit-favored-stocks-idUSKBN2A20ZS',
    'created_at' => Carbon::now()
]);

/////////////////////////////23//////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Exclusiva: presuntos piratas informáticos chinos utilizaron el error de SolarWinds para espiar a la agencia de nómina de EE. UU .: fuentes',
    'subtitulo' => 'Reuters',
    'contenido' => 'Presuntos piratas informáticos chinos explotaron una falla en el software creado por SolarWinds Corp para ayudar a ingresar a computadoras del gobierno de EE. UU. El año pasado, dijeron a Reuters cinco personas familiarizadas con el asunto, lo que marca un nuevo giro en una brecha de seguridad cibernética en expansión que los legisladores estadounidenses han etiquetado. una emergencia de seguridad nacional.
    https://www.reuters.com/article/us-cyber-solarwinds-china-exclusive/exclusive-suspected-chinese-hackers-used-solarwinds-bug-to-spy-on-u-s-payroll-agency-sources-idUSKBN2A22K8',
    'created_at' => Carbon::now()
]);
////////////////////////////////24///////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'los comerciantes minoristas instan a otros a mantener la fe mientras GameStop cae',
    'subtitulo' => 'LONDRES',
    'contenido' => ' El foro en línea de Reddit que desató un frenesí comercial global se mostró más sobrio el martes, y muchos inversores minoristas rogaron a otros que "compren la caída" mientras sus acciones favoritas se desplomaban.
    https://www.reuters.com/article/us-retail-trading-reddit/buy-the-dip-retail-traders-urge-others-to-keep-the-faith-as-gamestop-tumbles-idUSKBN2A22EZ  ',
    'created_at' => Carbon::now()
]);
////////////////////////////////////////25/////////////////////////////////////////////////////////////////////////////////

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Amazon pagará 61,7 millones de dólares para resolver los cargos de robo de propinas a los conductores',
    'subtitulo' => 'Reuters',
    'contenido' => 'Amazon.com Inc acordó pagar más de 61,7 millones de dólares para resolver las acusaciones de que engañó a los conductores de Amazon Flex con casi un tercio de las propinas de los clientes durante más de dos años, dijo el martes la Comisión Federal de Comercio.
     El dinero pagado a la FTC se utilizará para compensar a los conductores, dijo la agencia.
     https://www.reuters.com/article/us-amazon-drivers/amazon-to-pay-61-7-million-to-settle-charges-it-stole-driver-tips-idUSKBN2A2241',
     'created_at' => Carbon::now()
]);

///////////////////////////////////////////////26/////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Volkswagen planea desafiar a Google con su propio software para autos autónomos',
    'subtitulo' => 'Reuters',
    'contenido' => 'Volkswagen planea desarrollar la mayor parte del software necesario para los autos autónomos internamente, dijo el martes el jefe de la unidad de lujo del fabricante de automóviles alemán, Audi.
    https://www.reuters.com/article/us-volkswagen-software/volkswagen-plans-to-challenge-google-with-own-autonomous-car-software-idUSKBN2A229I',
    'created_at' => Carbon::now()
]);
/////////////////////////////////////////////27///////////////////////////////////////////////////////////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Wikipedia lanza nuevas reglas globales para combatir los abusos del sitio',
    'subtitulo' => 'Reuters',
    'contenido' => 'La fundación que opera Wikipedia lanzará su primer código de conducta global el martes, buscando abordar las críticas de que no ha logrado combatir el acoso y sufre de falta de diversidad.
    https://www.reuters.com/article/us-wikipedia-rules-exclusive/exclusive-wikipedia-launches-new-global-rules-to-combat-site-abuses-idUSKBN2A21PW',
    'created_at' => Carbon::now()
]);
///////////////////////////////////////28////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Panasonic dice que el negocio de Tesla es rentable, impulsa la perspectiva de ganancias',
    'subtitulo' => 'Reuters',
    'contenido' => 'Panasonic Corp dijo el martes que espera que su negocio de baterías que suministra a Tesla Inc sea rentable este año fiscal y elevó su pronóstico de ganancias operativas para todo el año en más de la mitad.
    https://www.reuters.com/article/us-panasonic-results/panasonic-says-tesla-business-to-be-profitable-boosts-profit-outlook-idUSKBN2A20L3',
    'created_at' => Carbon::now()
]);
////////////////////////////////////29///////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'El reinicio del juego es clave para el crecimiento futuro, ya que EA registra ingresos récord',
    'subtitulo' => 'Reuters',
    'contenido' => 'Los analistas de Wall Street esperan que Electronic Arts Inc registre ingresos trimestrales récord el martes, ya que los jugadores se quedaron en casa debido a las nuevas restricciones inducidas por la pandemia que impulsan la demanda de sus títulos deportivos "Madden NFL 21" y "FIFA 21" en el crucial temporada de compras navideñas.
    https://www.reuters.com/article/us-electronic-arts-results-preview/game-reboots-key-to-future-growth-as-ea-seen-posting-record-revenue-idUSKBN2A13A2',
    'created_at' => Carbon::now()
]);
///////////////////////////////////////30//////////////////////////
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Spotify lanza servicio de transmisión de música en Corea del Sur',
    'subtitulo' => 'Reuters',
    'contenido' => 'Spotify Technology SA hizo el martes un esperado debut en Corea del Sur, el sexto mercado musical más grande del mundo y hogar del género musical K-pop.
    https://www.reuters.com/article/us-spotify-tech-southkorea/spotify-launches-music-streaming-service-in-south-korea-idUSKBN2A13QF',
    'created_at' => Carbon::now()
]);




























DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Microsoft confirma que la escasez del Xbox Series X en México y el mundo seguirá por lo menos hasta junio',
    'subtitulo' => 'MARTINPIXEL',
    'contenido' => 'La nueva generación no será recordada en sus inicios por sus gráficos o tiempos de carga, lo hará por la cantidad tan limitada de unidades que aparecieron desde su preventa y su lanzamiento. Para las personas que siguen “cazando” un Xbox Series X, todavía tendrán que seguir esperando.
    En entrevista para New York Times, Mike Spencer, jefe de relaciones con inversionistas de Microsoft confirmó que la escasez de consolas seguirá por lo menos hasta junio. Recordemos que en el lanzamiento del Xbox Series X, la empresa mencionó que esperaba para el mes de abril terminar con la unidades limitadas, lamentablemente no será así.
    Hace poco Microsoft presentó sus resultados del segundo trimestre de 2021, señalando que tanto Xbox Series X y S representan que sus ingresos por hardware crecieron un 86%, superando los 5,000 millones de dólares de ingresos por juegos por primera vez. Spencer señaló que Microsoft vendió todas las unidades de Xbox que tenía en el último trimestre, por ese motivo es tan complicado encontrar un Xbox Series X en la actualidad.
    La situación no es exclusiva de Microsoft, tanto el PlayStation 5 con sus dos versiones y algunas GPU de AMD y Nvidia sufren de lo mismo. En noviembre Lisa Su, directora ejecutiva de AMD ya había mencionado que la industria necesitaba aumentar los niveles de capacidad general, advirtiendo las pocas unidades hasta la segunda mitad de 2021.
    MARTINPIXEL',
    'created_at' => Carbon::now(),
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Nintendo Switch Sales Blow Past 3DS, Animal Crossing Moves 31M Copies',
    'subtitulo' => 'Joel Hruska',
    'contenido' => 'The Nintendo Switch has been a hot commodity all through 2020 and the console’s sales figures reflect it. According to a recent Nintendo press release, the company sold 24.1 million Switches in 2020, a 35 percent increase year-on-year. The surge in sales has given the Switch the kick it needed to pass the lifetime sales of its predecessor, the Nintendo 3DS. As of December 31, 79.87M Switches have been sold worldwide. Back when the 3DS debuted, it faced a very different market.

    The 3DS launched in 2011, in the middle of mass-market smartphone adoption. Its initially high price and the uncertain future of its 3D effects put some users off the console. Nintendo saw which way the wind was blowing and slashed the 3DS’s price by nearly a third, from $250 to $170. Sales of the platform promptly surged, and while the 3DS never achieved the dizzying heights of the original Nintendo DS, its lifetime total of 75.92 million sales is enough to make it the 12th best-selling console of all time, beating out the NES, SNES, and the original Xbox One.
    
    While Nintendo doesn’t mention it, the Switch broke its own record for most units shipped this year. Nintendo’s fiscal quarters don’t align with the calendar year, so it may be waiting until what we would consider Q2 before it gives a formal full-year total.
    The Switch has already broken its 2019 shipment record by no less than 25 percent. If sales remained this strong for another year, the Switch’s total lifetime sales would be bumping up against the Wii, at 101.64 million consoles shipped over its lifetime. As it closes in on four years old, the Switch is outselling the PS4 at a comparable point in its life cycle.

    Ten years ago, it wasn’t uncommon to find pundits arguing that the only way Nintendo would survive is if it went all-in on smartphones and started working on mobile ports. Dedicated handheld gaming systems were dead, or so the popular opinion went, to be inexorably replaced by touchscreens and phones.

    If the 3DS proved that Nintendo had enough of a dedicated fan base to support a handheld console ecosystem, the Switch has shown that tens of millions of smartphone owners also enjoy gaming on a dedicated handheld platform. Animal Crossing has sold a massive 31.18M units in less than a year. The only game to sell more copies is Mario Kart 8 Deluxe, with 33.41M in lifetime sales. Animal Crossing will beat it next quarter, based on how well each is selling. Nintendo moved a total of 176.1 million games in calendar 2020, an increase of 43 percent over last year.

    Despite the impact of smartphones, dedicated handheld gaming is very much alive — at least if you’re a Nintendo fan. Don’t say such things near PlayStation Vita forums.',
    'created_at' => Carbon::now()
]);


DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Tesla recalls almost 135,000 vehicles over touchscreen failures',
    'subtitulo' => 'The Model S and X recalls come after NHTSA pressure.',
    'contenido' => 'Tesla is acting on the NHTSA’s pressure to recall cars over touchscreen failures, if begrudgingly. The Wall Street Journal reports the EV maker will recall just under 135,000 cars, including 2012-2018 Model S sedans and 2016-2018 Model X SUVs, over potential touchscreen failures. As the NHTSA previously outlined, models with a Tegra 3 chip risked losing key touchscreen functionality if their 8GB eMMC flash storage cards wore out, including the rear camera view, defrost settings and turn signal lighting.

    The recall officially starts on March 30th. Like Tesla offered in November, technicians will replace the affected boards for free.The issue can take about five to six years to surface if it happens.
    
    The company isn’t all that enthusiastic, however. It rejected the notion that the chip wear represented a defect, arguing to officials that it was “economically, if not technologically, infeasible” to expect the eMMC storage to last a vehicle’s whole useful lifespan. It was conducting the recall to end the investigation and improve the customer experience. In the recall notice, the NHTSA said it “does not agree” and that this didn’t change Tesla’s obligations.
    
    This isn’t Tesla’s only recall in recent memory. It asked some Model X owners to have their vehicles serviced over corroded power steering bolts in early 2020.
    
    The touchscreen failures are concerning, though. While it’s true that eMMC storage isn’t guaranteed to last (flash memory by its nature eventually loses write ability), it’s linked to important car functions — and many drivers might not know about that longevity. Ideally, car makers like Tesla would make it clear when components like this are likely to fail and ask drivers to come in well before those failures happen.',
    'created_at' => Carbon::now()
]);


DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Mass Effect Legendary Edition\' doesn\'t add same-sex romance to the originals',
    'subtitulo' => 'Jack really was into you, though.',
    'contenido' => 'This article contains spoilers for romance options across all three Mass Effect games.

    Mass Effect Legendary Edition is a comprehensive overhaul of Commander Shepard’s interstellar exploits across three iconic games, the first of which landed on store shelves in November 2007. At the time, George W. Bush was firmly ensconced in the White House, Fergie was still relevant, and same-sex marriage wouldn’t be federally legalized in the United States for eight more years. Mass Effect 2 appeared in 2010, and 3 hit just two years later.
    
    Shortly after the launch of the first Mass Effect, Fox News aired a segment called “Sexbox?” where hosts discussed the immorality of the title’s sex scenes with wide-eyed shock. The talking heads falsely claimed the game featured full digital nudity, and they were appalled at the inclusion of a non-straight romance option, where players could seduce Liara T’Soni, a mono-gendered alien.This Fox News bit permanently altered the trajectory of Mass Effect lore. 
    According to Mass Effect 2 writer Brian Kindregan, the sequel was poised to feature at least one pansexual character, Jack, including the ability to seduce her as either a male or female Shepard. This element was scrapped late in the development of Mass Effect 2, in direct response to Fox News criticism, Kindregan told TheGamer in January 2021. In the end, she was only available as a romance option in male Shepard playthroughs.

    “At the time... maybe more people in the world thought that there was a connection between reality and what gets discussed on Fox News,” Kindregan said. “The development team of Mass Effect 2 was a pretty progressive, open-minded team. But I think there was a concern at pretty high levels that if Mass Effect, which only had one gay relationship, Liara -- which on paper was technically not a gay relationship because she was from a mono-gendered species -- I think there was a concern that if that had drawn fire, that Mass Effect 2 had to be a little bit careful.”
    ','created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'SpaceX\'s second high-altitude Starship test flight could happen today',
    'subtitulo' => 'SN9 will try another flip maneuver and landing.',
    'contenido' => 'SpaceX considered its first high-altitude Starship launch test a success despite the explode-y landing, but the FAA was reportedly not amused. It said that SpaceX violated the terms of its launch license, triggering an investigation and delaying the next test originally scheduled for January 28th. However, it looks like the two parties have patched things up, as SpaceX has announced that it will attempt its second high-altitude Starship test as early as today, February 2nd.

    Starship serial number 9 (SN9) will attempt an ascent to 10 km in height (32,000 feet) before switching to its header landing propellant tanks. It will then reorient itself for reentry and start a controlled aerodynamic descent, moving the two forward and two aft flaps with the onboard flight computer. Closer to the ground, the SN9’s raptor engines will reignite as SN9 attempts another landing flip before (hopefully) touching down on the landing pad next to the launch mount.
    
    There will be a live feed of the flight test available here that will start a few minutes prior to liftoff. Given the dynamic schedule of development testing, stay tuned to our social media channels for updates as we move toward SpaceX’s second high-altitude flight test of Starship!
    
    This is much like what SN8 did successfully, apart from the “touching down” part. Those maneuvers, “combined with in-space refilling, are critical to landing Starship at destinations across the solar system where prepared surfaces or runways do not exist, and returning to Earth,” SpaceX wrote.
    
    It’s not clear what SpaceX did wrong that violated its license. At the time, the FAA said it “will not compromise its responsibility to protect public safety,” adding that “we will approve the modification only after we are satisfied that SpaceX has taken the necessary steps to comply with regulatory requirements.”
    
    SpaceX boss Elon Musk said on Twitter that the “FAA space division has a fundamentally broken regulatory structure” and that “under [their] rules, humanity will never go to Mars.” In fact, the FAA actually did recently streamline its commercial space launch regulations, but the new rules won’t go into effect until early March. In the meantime, Musk recently tweeted that he would be “off Twitter for a while.”
    
    In any case, the next test could happen as early as today. SpaceX said that it would make a live feed of the test flight available on its website “a few minutes prior to liftoff,” and advised that you “stay tuned to its social media channels for updates.”'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'NASA\'s delayed Moon lander contracts cast doubt on Artemis timeline',
    'subtitulo' => 'The program is less likely to make its 2024 target.',
    'contenido' => 'More signs are emerging that NASA’s Artemis program might not bring people to the Moon on time. The Verge has learned that NASA quietly pushed back the award timeframe for two lunar lander contracts from late February to April 30th, including the lunar landing system contract involving Blue Origin, SpaceX and Dynetics. The space agency said it needed more time to evaluate proposals and maintain a “seamless transition” from the development phase, although it said there was a chance it would award contracts sooner than late April.

    Blue Origin is working on its Blue Moon lander, while SpaceX is developing its Starship rocket. Dynetics is building a lander in a team-up with Sierra Nevada.
    
    The setback doesn’t come as a shock. Congress only gave NASA’s Human Landing System project $850 million in its latest spending bill versus the $3.2 billion it said was necessary for the planned 2024 Moon touchdown. it doesn’t help that NASA administrator Jim Bridenstine left as President Biden took office, leaving his deputy Steve Jurczyk in his place. The organization just doesn’t have the resources or direction it was expecting.
    
    As such, the chances of NASA making its 2024 Artemis goal are that much slimmer. That’s also discounting any possible changes in priorities at NASA under the Biden administration. The new White House has focused much of its energy on dealing on immediate crises like the COVID-19 pandemic and the resulting economic downturn. It may be reluctant to devote much (if any) attention to a Moon landing until the country is in better shape.'
    ,'created_at' => Carbon::now()
    ]);


DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Beeper, la app que permite tener WhatsApp, Telegram y Signal en el mismo lugar',
    'subtitulo' => 'Ya se puede bajar una nueva súper aplicación de mensajería: se llama Beeper y es capaz de unificar 15 apps en una sola interfaz. Cómo funciona.',
    'contenido' => 'Por semanas, nuevo "contrato" de WhatsApp revolucionó la opinión pública ya que los usuarios estaban descontentos con compartir sus datos personales, contactos, información de compras y pagos con Facebook. Por esta razón, surgieron aplicaciones como Signal y Telegram que, gracias a la polémica, fueron descargadas por más de diez millones de personas en menos de siete días.
    Para simplificar el problema de tener varias cuentas en distintas aplicaciones de mensajería, llegó al mercado Beeper, una aplicación que permite unificar hasta 15 aplicaciones de mensajería en una sola bandeja de entrada. Se puede anclar WhatsApp, Signal, Telegram, Slack, Discord, Hangouts, Skype, Messenger, los mensajes privados de Instagram y Twitter, entre otras. El objetivo de Beeper es que no se escape ningún mensaje.
    Beeper fue desarrollada por Eric Migicovsky, un ingeniero de sistemas estadounidense que fundó la empresa de relojes inteligentes Pebble y actualmente también trabaja en la aceleradora YCombinator. La aplicación fue lanzada en enero de este año y trabajó en perfeccionar el sistema durante casi dos años.

    "Beeper es una sola aplicación para chatear en iMessage, WhatsApp y otras 13 redes. La aplicación fue puesta a prueba dos años con varios clientes", anunció Migicovsky en su cuenta oficial de Twitter.'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Elon Musk cambió su perfil de Twitter y el Bitcoin se disparó: qué pasó',
    'subtitulo' => 'El hombre más rico del mundo hizo explotar el precio de la criptomoneda más famosa con una sola maniobra.',
    'contenido' => 'El precio de Bitcoin vivió semanas intensas. Durante el año pasado, la valorización de la moneda 
    creció 300%. Sin embargo, el precio de Bitcóin había caído un 18% el 11 de enero pasado, 
    algo que no ocurría desde la fuerte baja en marzo de 2020, cuando la pandemia de Covid-19 causó pánico 
    en los mercados. Incluso llegó a desplomarse un 20% en la sesión del lunes. En su mejor momento, la criptomoneda llegó a superar los 
    US$ 40.000 de cotización. Ahora, en las últimas horas, el precio volvió a repuntar por una causa insólita. El empresario Elon Musk cambio su biografía o descripción breve de su cuenta en Twitter, que ahora solo tiene el texto "#bitcoin" con el que parece mostrar su apoyo a esta criptodivisa. El efecto ha sido inmediato y alucinante, 
    porque en una sola hora el valor de un bitcoin se ha incrementado en US$ 5.000. Antes de que Musk hiciera nada, el valor del bitcoin estaba aproximadamente en 32.200 dólares. Al cambiar su \'bio\' en Twitter y poner "#bitcoin" se desató la fiebre por la compra y 
    en tan solo una hora ese valor se ha incrementado 5.000 dólares hasta los 37.400.
    El multimillonario empresario, seguido por 43,8 millones de usuarios en Twitter, tiene un historial de comentarios que mueven el mercado.
    GameStop Corp, que ha estado en el centro del frenesí del comercio minorista, subió un 50% el martes después de que Musk tuiteara "¡¡¡Gamestonk!!!", junto con un enlace al grupo de discusión de comercio de acciones Reddit Wallstreetbets. Allí, algunos los seguidores se refieren a él cariñosamente como "Papa Musk".

    "Stonks" es un término irónico para referirse a las acciones muy utilizado en las redes sociales.',
    'created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'La estrategia de WhatsApp para recuperar la confianza de los usuarios: cómo responde Telegram',
    'subtitulo' => 'La app propiedad de Facebook lanza nuevas actualizaciones con la seguridad y privacidad como ejes. Telegram también anunció novedades.',
    'contenido' => 'Enero ha sido un mes para el olvido para WhatsApp. Luego del polémico anuncio sobre las que serían las nuevas políticas de privacidad a partir del 8 de febrero, la lluvia de críticas y la marcha atrás de la red de mensajería, desde la app que pertenece a Facebook están haciendo todo lo posible para devolverle la confianza a los usuarios. La primera fue posponer la medida a mayo.
    La siguiente fue anunciada el jueves 28 de enero. WhatsApp confirmó en su cuenta oficial de Twitter que ya comenzó a implementar una nueva función de seguridad para WhatsApp Web y la aplicación de escritorio. La actualización incluirá el desbloqueo facial y de huellas dactilares al vincular dispositivos.
    Hasta ahora, bastaba con escanear un código QR a través del celular y así acceder a las conversaciones, algo peligroso desde el punto de vista de la seguridad si una persona lograba tener acceso a nuestro smartphone y no estaba activado una función de desbloqueo en el equipo.

    La red de mensajería también bloqueará en forma definitiva a quienes no usen la versión oficial de la app por comprometer la seguridad de los usuarios. 
    WhatsApp buscar añadir con esta novedad una capa extra de privacidad a su aplicación, aunque el usuario es el que deberá decidir si prefiere activarla o no. Enfocados en garantizar la seguridad, la aplicación explicó en el tweet donde hizo el anuncio que la empresa "no ve los datos de su rostro o huellas dactilares".

    La red de mensajería también bloqueará en forma definitiva a quienes no usen la versión oficial de la app por comprometer la seguridad de los usuarios. Quienes tengan una versión pirata de WhatsApp serán advertidos por la compañía, pero si no desinstalan la aplicación no oficial serán bloqueados para poder utilizar la red de mensajería original en esa línea.

    Además, la aplicación añadió este jueves un nuevo canal para informar a los usuarios de las nuevas funciones y actualizaciones: los estados de WhatsApp. En la primera publicación en este formato volvieron a insistir en la seguridad de la red de mensajería.

    "Nuestro compromiso con tu privacidad permanece igual" y "WhatsApp no puede leer ni escuchar tus conversaciones personales ya que están cifradas de extremo a extremo" fueron los primeros mensajes.

    En las últimas semanas, las redes sociales de la app publicaron infografías para aclarar las versiones más polémicas entorno a la seguridad del usuario.'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Uruguay sin internet por una falla en general: ¿afecta a la Argentina?',
    'subtitulo' => 'Se cayó el servicio de Administración Nacional de Telecomunicaciones (Antel) de Uruguay. Qué pasó.',
    'contenido' => 'Este lunes, la conectividad de la Administración Nacional de Telecomunicaciones (Antel) está caída en Uruguay debido a una falla en los servidores DNS. Por el momento, la compañía estatal uruguaya analiza si se debe a una falla interna o a un problema global.





    Los sitios web de instituciones estatales o municipales uruguayas por el momento no funcionan, pero no hay problemas con Google, Facebook y Twitter.
    
    Los usuarios de Antel vieron afectados tanto los datos móviles como las redes Wi-Fi esta mañana. Otras empresas del mercado no constataron las mismas fallas. Las zonas más afectadas son Montevideo y el interior del país.
    La empresa no realizó declaraciones públicas por el momento. El servicio comenzó a volver a la normalidad y hasta el momento no afectó a la Argentina.  Sin embargo, desde la Argentina, la Cámara Argentina de Internet (Cabase) no ve ningún comportamiento anómalo en tráfico de Antel, que está conectada a la red IXPs de la primera.

    Los usuarios en Twitter salieron a la carga contra las fallas: "Qué conveniente. Un tuit de recargas justo cuando estamos todos sin Wi-Fi", comenta un usuario. "Enchufen los servidores". "Los servidores empresariales muertos. En domésticos usando el DNS externo anda pero si usás el de Antel no resuelve". "¿Alguien se tropezó con un cable?". "Se apagó Antel".

    QUÉ ES DNS Y CÓMO FUNCIONA
    Sin los servidores DNS no existiría internet. El sistema de nombres de dominio (o conocido en inglés como Domain Name System) es un sistema que traduce dominios a direcciones IP.

    ¿Qué significa esto? Todas las direcciones web (por ejemplo, www.infotechnology.com), tienen una dirección IP. Cuando las personas ingresan la URL en el buscador, el servidor DNS traduce el dominio en la dirección IP y despliega la página.'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'El Gobierno creó un inventario de bienes informáticos: qué es y para qué sirve',
    'subtitulo' => 'La ONTI dirigirá un nuevo inventario de bienes informáticos y servicios digitales. En qué beneficiará a las políticas públicas del Estado.',
    'contenido' => 'El Gobierno anunció esta semana la implementación de un nuevo inventario de bienes informáticos y servicios tecnológicos. Fue creado a través de la decisión administrativa N°5/2021 publicada en el Boletín Oficial y es parte de la estrategia digital del Gobierno.

    El objetivo del inventario es "brindar información certera y actualizada al Estado para que elabore y amplíe políticas públicas orientadas a la implementación de soluciones, integración, estandarización y optimización en las contrataciones de bienes y servicios tecnológicos en el sector público nacional", indicaron desde el Gobierno a través de un comunicado. Esto quiere decir que llevarán un registro unificado de los bienes informáticos y servicios tecnológicos de todas las entidades y jurisdicciones del sector público nacional.
    
    La secretaria de Innovación Pública, Micaela Malcolm, explicó que se trata de "una herramienta estratégica y eficaz para crear políticas de innovación tecnológica y mejorar los procesos administrativos para construir un Estado cercano e integral".'
    ,'created_at' => Carbon::now()

    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => '¿Quiénes son Wall Street Bets, el grupo de Reddit que está atacando a la Bolsa?',
    'subtitulo' => 'El foro r/wallstreetbets fue moderado por acción de Reddit. Cómo lograron subir las acciones de GameStop.',
    'contenido' => 'La comunidad de apuestas de Wall Street r/wallstreetbets, conocida en la red como WallStreetBets, es un foro de Reddit en el que inversores anónimos recomiendan acciones de la Bolsa. Sus tareas son especular con acciones de la Bolsa de Wall Street y encontrar debilidades en el mercado o productos financieros. En total, 2.9 millones de personas conforman el foro y se autodenominan "degenerados".





    Precisamente, los "degenerados" se nuclean en un subforo de la plataforma Reddit. El grupo fue fundado en 2012 por Jaime Rogozinski (39), para nuclear jóvenes inversores que deseen debatir sobre finanzas, dinero y comercio. 
    Rogozinski vive en Estados Unidos junto a su esposa y dos hijos gemelos y es licenciado en Física. En 2012, fundó el foro pero nunca imaginó el poder de su comunidad. "Estoy mirando una película de terror", dijo al medio The Wall Street Journal. "Puedo ver el tren frenar de golpe en cámara lenta", agregó.  

    En abril de 2020, fue despedido por la compañía Reddit por monetizar su éxito con un libro. Lo tildaron de "ambicioso" y de "ávaro".  Actualmente, Rogozinski trabaja como consultor en un banco.

    "Lo diferente de WallStreetBets es que no solo comparten cuando ganan dinero sino que la gente es transparente y admite que perdió dinero", asegura. "Este grupo masivo se organizó y tienen un asiento en la mesa de póquer, que anteriormente era solo para unos pocos", expone.

    El fundador de WallStreetBets confesó "odiar a los supremacistas blancos" que publicaban en el foro.  

    ¿Cuál es el futuro de su foro, WallStreetBets? Los moderadores de WallStreetBets hicieron privado el foro r/wallstreetbets. Por otro lado, la comunidad también tenía un canal de Discord, la aplicación de videollamadas, y también fue prohibido. Rogozinski también tomó cartas en el asunto y borró a algunos moderadores y una sala de chat privada de Discord.'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Reino Unido construye el primer aeropuerto para drones del mundo',
    'subtitulo' => 'Reino Unido construye el primer aeropuerto para drones del mundo',
    'contenido' => 'El Urban Air Port Air-One fue seleccionado como el ganador del Future Flight Challenge del gobierno del Reino Unido, una competencia para desarrollar infraestructura de aviación para aviones eléctricos de despegue y aterrizaje verticales anticipados (eVTOL), como drones de carga y taxis aéreos.




    Según informa el sitio autocar.co.uk, Urban Air Port fue seleccionado por la División de Movilidad Aérea Urbana de Hyundai Motor Group como su socio de infraestructura prioritario, y la firma coreana planea construir su propio avión eVTOL y comercializarlo para 2028. 
    Se dice que el puerto es un 60% más pequeño que un helipuerto tradicional. Las técnicas de construcción permiten que el sitio se instale en "cuestión de días, emita emisiones netas de carbono cero" y opere "completamente fuera de la red", según la firma.
    La NASA afirma que la movilidad aérea urbana solo en los EE. UU. podría valer  u$s 500 mil millones en el corto plazo, aunque existe un debate sobre los obstáculos legislativos que deben superarse antes de que tales vehículos puedan operarse en números. 

    El fundador de Urban Air Port, Ricky Sandhu, dijo: "Los coches necesitan carreteras, los trenes necesitan rieles, los aviones necesitan aeropuertos, los eVTOL necesitarán Urban Air Ports. Esto mejorarán la conectividad en nuestras ciudades, impulsarán la productividad y ayudarán al Reino Unido a tomar la iniciativa en una economía global limpia completamente nueva ". 
    ',
    'created_at' => Carbon::now()
]);



DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Dogecoin, la cripto que nació como un chiste y va camino a valer más que el peso: ¿se puede entrar?',
    'subtitulo' => 'Qué pasó con la criptomoneda meme y por qué subió tanto.',
    'contenido' => 'Dogecoin (denominada DOGE/BTC)  es, más allá del Bitcoin , 
    una de las criptomonedas del momento. La moneda digital, que se originó como una 
    broma entre amigos en torno al popular meme de doge se disparaba ayer hasta un 800% en
     uno de sus mercados después de que el rally de Reddit fijara sus ojos en ella y los 
     comentarios para convertirla en el equivalente de GameStop, la maniobra que tanto molestó a
      Wall Street.


    El precio de la moneda, según datos de Investing.com para el mercado de Binance, escaló un 336%, para situarse en los 0,00000109, su máximo del día, con 26.300 millones negociados durante sus horas de negociación. El grupo que hizo posible esta evolución se llama SatoshStreetBets y, al igual que WallStreetBets, quiere impulsar el precio de las criptomonedas.
    El autodenominado líder del grupo de reddit tuiteó que Dogecoin nunca llegó a US$1 e inmediatamente se dispararon ordenes de compra y subió el precio.'
    ,'created_at' => Carbon::now()
    ]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Qué son las "billeteras virtuales" y por qué son favoritas de los argentinos: la usan más de la mitad',
    'subtitulo' => 'El uso de métodos de pagos digitales y el e-commerce se potenció durante la pandemia. Según una consultora, el 66% de los argentinos utilizan billeteras digitales. Por qué la Argentina es uno de los países que más utiliza canales online para comprar.',
    'contenido' => 'La evolución del sector fintech se aceleró frente a la transformación digital impulsada por la pandemia. A la vez, desafiaron al ecosistema financiero tradicional obligándolos a reorganizarse e implementar billeteras de pagos y servicios digitales. A las cerca de 25 billeteras digitales de las Fintech como Mercado Pago o Ualá se sumaron este año las opciones de la banca tradicional: Cuenta DNI, BNA+, Iudu y ANK, entre otras. Al día de hoy, las fintech argentinas nuclean a 10 millones de argentinos en todo el país, según datos de la Cámara Argentina de Fintech.






    Esta semana, se dio a conocer que la Argentina es el país que más utiliza billeteras digitales en el mundo, según la consultora Minsait Payments. En total, el 66% de los argentinos bancarizados aumentó el uso de billeteras virtuales como medios de pago. Esta tendencia se vio acelerada por la pandemia.
    De acuerdo al informe Tendencia de Medios de Pago de la consultora, el 50% de las transacciones son a través de código QR. Para todos los analistas de la industria fintech, Mercado Pago es la razón por la que los pagos con QR se extendieron en el país. Actualmente, la compañía tiene más de 700.000 comercios adheridos en el mercado QR y fue la primera en invertir para extender el uso de la red QR. Hoy en día, todas las billeteras digitales ofrecen pagos a través de código QR. En total, la utilización del código QR creció de un 34% a un 54% en 2020.
    La consultora Minsait Payments comparó el uso de tarjeta de crédito en la Argentina con el resto de la región y constató que el 63% de la población utiliza varias tarjetas de crédito en simultáneo en sus billeteras digitales. En tanto, el 39% las usa para compras de bajo importe y el 57% para compras de importe más elevado. En conclusión, según la consultora, la tarjeta continúa siendo el medio de pago favorito de los argentinos. Sin embargo, la tarjeta de débito es "la más odiada", siendo el único país que no las utiliza tanto como las de crédito.'
    ,'created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'La propuesta de Microsoft para "revivir" a seres queridos con inteligencia artificial',
    'subtitulo' => 'La empresa de tecnología solicitó una patente para crear modelos 2D/3D de personas fallecidas y personajes emblemáticos. Cómo funciona.',
    'contenido' => 'La empresa de tecnología Microsoft invierte más de US$ 16.800 millones al año en su departamento de investigación y desarrollo. Parte de este presupuesto es destinado a la innovación de la empresa y continuar fomentando la propiedad intelectual. En este contexto, esta semana se dio a conocer que la empresa solicitó una patente para desarrollar un bot que reencarna seres queridos a través de un chat.





    La aprobación de patente permitiría a Microsoft crear un bot de chat a partir de una persona específica. El sistema utilizaría datos personales como imágenes, notas de voz, publicaciones en redes sociales y mensajes de aplicaciones de mensajería para construir la identidad digital de la persona.
    
    Además, "se podrá generar un modelo 2D/3D de la persona específica con imágenes, información de profundidad y/o datos de vídeo asociados con la persona específica".
    "Los datos pueden utilizarse para crear o modificar la personalidad de la persona", declara la empresa en la patente. "El índice especial se puede utilizar para entrenar a un bot de chat para conversar e interactuar. En Microsoft trabajamos para fomentar la innovación en todo el mundo mediante el uso de la propiedad intelectual y las patentes. Para esto, es necesario beneficiar a las partes interesadas que interactúan con dicha patente. Microsoft implementa propiedad intelectual para ayudar clientes, socios y desarrolladores a aprovechar la tecnología", explica Microsoft.

    Gracias a la recopilación de notas de voz, el chatbot podría sonar como la persona real. "Se puede generar una fuente de voz de la persona específica utilizando grabaciones y datos sonoros relacionados con la persona específica".
    Según Microsoft, se podrán elegir personas vivas o muertas como un amigo, un pariente, un conocido, una celebridad, un personaje ficticio, una figura histórica, una entidad aleatoria, entre otros.
    Por otro lado, la patente también incita a los usuarios a crearse a sí mismos para perdurar después de la muerte: "La persona específica también puede crearse a sí mismo (por ejemplo, el usuario se crea y entrena al bot de chat".'
    ,'created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Las predicciones de este gigante de la tecnología para 2021: 5G, mucha nube y computación cuántica',
    'subtitulo' => 'John Roese, CTO de Dell, enumeró las tendencias que atormentarán a las grandes compañías reticentes del cambio tecnológico.',
    'contenido' => 'Un ejecutivo de la empresa de tecnología Dell reveló las tendencias que deberán afrontar las grandes compañías en 2021. En medio de la crisis económica devenida por la pandemia, la compañía fue una de las grandes ganadoras: aumentaron sus ingresos en un 13% interanual y en los meses de julio, agosto y septiembre, obtuvieron una ganancia de US$ 6.000 millones.




    Su crecimiento está conectado con su plan de negocios: en los últimos cinco años, Dell invirtió US$ 20.000 millones en expandir su modelo de negocios. Actualmente, ofrecen servicios de seguridad, Big Data, inteligencia artificial y modelos machine learning a entidades financieras, sistemas de salud y federaciones de fútbol. La compañía trabaja en conjunto con la OTAN (Organización del Tratado del Atlántico Norte) en un vertical de negocios de tecnología 5G.
    En primer lugar, el ejecutivo asegura que la viabilidad la computación cuántica se verá en los próximos años: "No debe verse como un reemplazo de la computación tradicional, sino como un complemento. Las habilidades de programación de computación cuántica, pueden ser desarrolladas con simuladores".

    En tercer lugar, Roese sugiere que el 5G evolucionará todas las tecnologías. "2021 será el año en el que el 5G brotará. Las empresas deberán dominar el uso técnico del 5G para que sea finalmente desplegado en modelos públicos y privados", asegura.

    Según el experto, el 5G será expandido en Estados Unidos por las compañías de cloud más importantes como Microsoft, Corning y Dell. Los beneficios de esta nueva tecnología podrían transformar y crear nuevas herramientas, no solo al servicio de los consumidores sino incluso para negocios, infraestructuras y la defensa de compañías y bancos frente ataques cibernéticos.

    El 5G es la quinta generación de las tecnologías y estándares de comunicación inalámbrica y aunque todos hablan de la velocidad del 5G, aunque no se destaca solo por eso. Será capaz de tener un ancho de banda mayor y, por tanto, tendrá la capacidad de sostener más conexiones que el sistema viejo. Esto se traduce a que tendremos señal hasta en lugares atestados de personas.

    La tecnología reducirá el tiempo de respuesta que le lleva a un celular mandar una orden y recibir una respuesta a cero. Actualmente, compañías de tecnología como Apple, Huawei y Samsung compiten por la red más grande y eficiente de 5G.
    En la Argentina, se espera que la tecnología llegue después de 2022 o 2023. En el año 2018, Personal junto a Nokia probaron en Puerto Madero el alcance del 5G el que alcanzó velocidades de 10 Gbps. La primera demostración de 5G en el país fue de Movistar en 2017: lo hizo junto con Sony Ericcson. Argentina fue uno de los últimos países de la región en incorporar el 4G en el 2014.'
    ,'created_at' => Carbon::now()    
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Starlink, la internet súper rápida del hombre más rico del mundo, viene a la Argentina: cómo funciona',
    'subtitulo' => 'MARINA PALEO',
    'contenido' => 'Starlink, el servicio de internet de banda ancha de órbita baja de SpaceX, la compañía aeroespacial privada del millonario Elon Musk, ya puso en órbita 895 satélites de órbita baja. La inversión total alcanzaría los US$ 10.000 millones y generaría unos US$ 30.000 millones anuales.





    No obstante, necesita lanzar varios miles más para ofrecer internet de banda ancha con alcance mundial. Elon Musk planea lanzar 30.000 satélites y aspira a ofrecer velocidades ultrarrápidas de internet de hasta 1 gbit/s, con latencias entre 25 ms y 35 ms. La compañía de tecnología Microsoft también es parte del negocio: el vertical de computación de la nube Azure conectará los satélites al almacenamiento en la nube.
    
    Como parte de este proceso, en diciembre, Starlink consiguió licencia para operar en la Argentina. El Ente Nacional de Comunicaciones (Enacom) autorizó la implementación del servicio por medio de la resolución 1291/2020.
    Según fuentes del sector, en un principio Starlink deberá coordinar con Arsat, la empresa de telecomunicaciones del estado argentino, para resolver la frecuencia y el enlace de dichos satélites con las redes satelitales de la Argentina. Además, Arsat podría brindar asistencia técnica a la empresa para poner en órbita satélites de órbita baja.

    En el caso de concretarse, el servicio no llegaría a todo el país, sino que llegará hasta Bahía Blanca.

    El proyecto de SpaceX fue registrado bajo el nombre Tibro Netherlands B.V. (Tibro es Orbit al revés, casualidad). Enacom autorizó a dicha compañía como proveedor de internet satelital en la Argentina.
    La licencia está supeditada a cumplir con diferentes condiciones del ente. Starlink tiene que cumplir con una serie de obligaciones: debe utilizar correctamente las bandas de frecuencia atribuidas tanto en el ámbito nacional o internacional, coordinar con los operadores locales y extranjeros, así como conseguir la autorización para el uso del espectro y brindar información fidedigna sobre sus satélites, entre otros requisitos.'
    ,'created_at' => Carbon::now()
]);


DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Las 4 tendencias tecnológicas que prometen cambiar los negocios en 2021',
    'subtitulo' => 'Los ejecutivos del sector tecnológico sugieren que las empresas argentinas transformarán sus procesos y la forma de trabajar de sus empleados por medio de la automatización, inteligencia artificial y Big Data.',
    'contenido' => 'La pandemia, sin dudas, aceleró la transformación tecnológica de las empresas. Según el estudio Digital Shock realizado por la empresa de investigación OnePoll, las compañías argentinas aceleraron su transformación digital entre seis meses y un año. El sector financiero y de telecomunicaciones fueron los que más mutaron en 2020, de acuerdo al mismo informe.






    "El Banco Galicia que, en 48 horas, logró escalar su infraestructura para que sus 7.000 empleados trabajen utilizando tecnología Citrix, un ecosistema de micro servicios. Algo similar sucedió con Telecom", detallan desde OnePoll, la compañía que llevó a cabo la investigación del estudio Digital Shock. Los detalles de los casos estuvieron a cargo de Citrix. 
    
    Aunque el panorama parece incierto, los ejecutivos del sector ya prevén las tendencias que traerá el 2021. Según los expertos, la automatización de procesos, inteligencia artificial, aumento de uso de billeteras digitales y canales e-commerce se fortalecerán aún más este año.',
    'created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Qué es Signal, el servicio de mensajería "secreto" en el que el inventor de WhatsApp invirtió millones',
    'subtitulo' => 'La página principal de Signal abre con una frase: "Habla con libertad". Con cifrado abierto, ¿Qué plantea esta aplicación de mensajería innovadora y por qué la eligen los especialistas?',
    'contenido' => 'Frente a la nueva Política de Privacidad de WhatsApp millones de usuarios están buscando alternativas a la aplicación de mensajería perteneciente a Facebook y un nombre resalta: Signal. 





    A nivel mundial, la aplicación Signal fue descargada 8.8 millones en la última semana. 
    "Signal se enfoca en la privacidad, pero con todas las características que esperas de una aplicación de chat", así se presenta el proyecto colaborativo.  
    
    Desarrollado por la organización Open Whisper Systems, la cual pertenece a Twitter desde el 2011, Signal (el nuevo nombre que TextSecure adoptó en 2015) se presenta como una opción distinta en el mundo de la mensajería instantánea: pone especial énfasis en la seguridad y la privacidad.
    Con un código abierto que fue liberado en 2011 luego de haber sido comprado por Twitter, Signal permite el desarrollo de su software por parte de la comunidad y basa sus actualizaciones en aportes hechos por miembros de esta. El código ha sido proporcionado de forma gratuita por la organización Signal Foundation, la cual opera sin fines de lucro.

    No debería sorprender que Signal sea una alternativa viable: la organización sin fines de lucro inició con un préstamo de US$ 50 millones de Brian Acton, el cofundador de WhatsApp.
    La base de datos en el teléfono del usuario es cifrada por defecto al utilizar Signal y todos los mensajes enviados entre usuarios son protegidos con un cifrado de extremo a extremo. A diferencia de Telegram, WhatsApp y Facebook, la única información que la aplicación recolecta de los dispositivos es el número de teléfono, el cual no conecta a la identidad de su dueño.
    ',
    'created_at' => Carbon::now()
]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Alertan más bajas en Bitcoin antes de la próxima subida: a cuánto llega y por qué conviene entrar',
    'subtitulo' => 'Luego de una semana de entusiasmo, analistas de mercado predicen una disminución de Bitcoin hasta los US$ 26.000.',
    'contenido' => 'Luego de haber alcanzado su máximo histórico hace unas semanas, la principal criptomoneda  se redujo en más de US$ 10.000 para luego recuperarse  y cotizar, cercano a los US$ 32.500. Sin embargo, especialistas coinciden en que es probable que los problemas de Bitcoin en las próximas semanas aún no hayan terminado, y algunos predicen una mayor disminución hasta los US$ 26.000.
    Durante el año pasado, la valorización de la moneda creció 300%. Sin embargo, el precio de Bitcóin había caído un 18% el 11 de enero pasado, algo que no ocurría desde la fuerte baja en marzo de 2020, cuando la pandemia de Covid-19 causó pánico en los mercados. Incluso llegó a desplomarse un 20% en la sesión del lunes.
    Se especula que el repunte por encima de los 40,000 dólares puede haber incentivado a los mineros a hacer una pausa para sacar sus ganancias, ya que los datos muestran que las ventas de los mineros han alcanzado su punto más alto desde julio de 2019. Además, las preocupaciones giraban en torno a que el mercado estaba sobreapalancado después de ver ganancias tan rápidas.
    Por ejemplo, el11 de enero, el mercado de Bitcoin experimentó una gran contracción prolongada provocada por grandes órdenes de venta en Coinbase. A medida que las ballenas o los inversores de alto patrimonio neto vendían, provocó que muchos contratos largos se liquidaran en cuestión de horas. Las liquidaciones consecutivas provocaron un efecto dominó, lo que provocó una fuerte liquidación y una corrección del 16%.

    Ki-Young Ju, director ejecutivo de la firma de análisis blockchain CryptoQuant, declaró al sitio Coindesk que "no esta seguro de que el mínimo de US$ 28.000 de las últimas horas sea el piso". Ki-Young Ju destacó una "prima de Coinbase" negativa como evidencia de una caída en la demanda de los grandes inversores".

    El indicador de primas Coinbase de CryptoQuant mide el diferencial entre el par BTC / USD de Coinbase y el par BTC / USDT de Binance, que incluye el tether de la moneda estable (USDT, + 0.12%). Un diferencial positivo implica fuertes entradas institucionales, ya que Coinbase se considera sinónimo de individuos e inversores institucionales de alto patrimonio neto. Por otro lado, en los últimos días, la prima prácticamente se ha evaporado, una señal de debilitamiento de la demanda institucional. Mientras que los inversores minoristas compran bitcoins directamente en el mercado al contado, muchos inversores institucionales invierten a través de Grayscale Bitcoin Trust por motivos regulatorios.

    Matthew Dibb, director de operaciones y cofundador de Stack Funds, también citó la prima negativa de Coinbase como motivo de preocupación para los alcistas y tomó nota de la configuración técnica bajista de bitcoin: "BTC rompió el soporte a corto plazo el jueves, y aunque el mercado está operando positivamente ahora, podemos ver mínimos hasta la marca de US$ 26.000 en las próximas semanas" .

    Especialistas consideran que se necesita un movimiento por encima de los US$ 35.000 para abortar la visión bajista. Patrick Heusser, jefe de operaciones de Crypto Broker AG, afirmó que "ese nivel podría ponerse a prueba, ya que el mercado de derivados está más relajado ahora y hemos visto un buen interés de compra de alrededor de USD 30.000". Y agregó que "las tasas de financiación perpetua y la prima de futuros están volviendo hacia su media desde los niveles elevados observados a principios de este mes cuando bitcoin se negociaba cerca de máximos históricos".
    ',
    'created_at' => Carbon::now()
]);
DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Chau plástico: Ualá lanza la tarjeta virtual para que el celular sea la billetera para todo',
    'subtitulo' => 'La fintech con 2,5 millones de clientes anunció su tarjeta virtual. Cómo funciona y para qué podrá usarse.',
    'contenido' => 'La evolución del sector fintech se aceleró frente a la transformación digital impulsada por la pandemia. A la vez, desafiaron al ecosistema financiero tradicional obligándolos a reorganizarse e implementar billeteras de pagos y servicios digitales. A las cerca de 25 billeteras digitales de las Fintech como Ualá o Mercado Pago se sumaron este año las opciones de la banca tradicional: Cuenta DNI, BNA+, Iudu y ANK, entre otras. Al día de hoy, las fintech argentinas nuclean a 10 millones de argentinos en todo el país, según datos de la Cámara Argentina de Fintech.





    Uno de los players del sector es Ualá, una de las fintech con mayor crecimiento. En total, la compañía de finanzas digitales tiene 2,5 millones de clientes. A fines de 2020, comenzaron su expansión en América Latina con el lanzamiento de sus operaciones en México, un país de 128 millones de habitantes en donde sólo 47% de las personas tiene una cuenta bancaria, según la Encuesta Nacional de Inclusión Financiera México.
    
    En cuanto a la Argentina, sus planes de expansión continúan: el año pasado, anunciaron la solución de cobros con link de pago mPOS para convertirse en un "ecosistema de pagos digitales". Esta semana, anunciaron su primer gran lanzamiento de 2021: la tarjeta Ualá física también estará disponible en una versión digital. ¿Cómo funciona? El CEO de la compañía Pierpaolo Barbieri explicó que la tarjeta virtual podrá ser utilizada para hacer compras online, pagar suscripciones y débitos automáticos.
    Según un estudio de mercado de Mastercard, el 18% de las personas que usa la tarjeta Ualá la utiliza para el pago de servicios y compras online.

    La tarjeta virtual es internacional y está disponible a las 24 horas de haberse registrado a través de la aplicación. Es un medio 100% digital y gratuito.

    "El futuro es mobile. Cada vez más las personas buscan resolver sus necesidades desde el celular, en pocos clicks y a bajo costo. Con este anuncio damos un paso más en el camino de hacer más fáciles las finanzas personales", concluye Andrea Arrébola, gerente de medios de pago de Ualá.
    ',
    'created_at' => Carbon::now()


]);

DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Teams va a convertirse en una plataforma digital tan importante como el navegador de Internet", dijo el CEO de Microsoft',
    'subtitulo' => 'En una entrevista con Financial Times, Satya Nadella aseguró que Teams podría volverse tan integral como un navegador de Internet.',
    'contenido' => 'Si 2020 fue el año de la videoconferencia, 2021 podría ser el año en que las aplicaciones que se popularizaron durante la crisis del Covid-19 consolidarán su posición en el corazón de la vida laboral.






    En esta carrera por hacer una nueva versión del trabajo a la sombra de la pandemia, no hay nadie más ambicioso que Microsoft Eso podría convertir a Teams, su servicio de comunicación y colaboración construido sobre Office, en el producto nuevo más importante de la compañía de software durante años.
    
    Según Satya Nadella, CEO de Microsoft, Teams va camino de convertirse en una plataforma digital tan importante como el navegador de Internet o un sistema operativo de computadora.
    En una entrevista con Financial Times, definió al software en la nube como una nueva "capa organizativa", que reúne todas las herramientas que un trabajador necesita en un solo lugar, además de actuar como una plataforma para que otros desarrolladores brinden sus propios servicios. El resultado: herramientas de colaboración, videoconferencias, chat y otras aplicaciones comerciales, todo alcanzado a través de una única interfaz de usuario.

    Si el mundo laboral no ha visto nada parecido antes, existe al menos un paralelo en la esfera del consumidor. "En China, WeChat es el Internet; ese es un gran ejemplo", dijo Nadella. "No hay un equivalente occidental. En todo caso, Teams es probablemente lo más cercano en lo que respecta al área laboral".

    El entusiasmo del número uno de Microsoft es comprensible. Teams -junto con las aplicaciones de empresas como Zoom y Google-, actuaron como el pegamento digital que mantuvo a muchas empresas en funcionamiento en 2020. La cantidad de usuarios activos diarios de Teams aumentó a 115 millones a fines de septiembre, desde los 13 millones de mediados de 2019.

    En un solo día durante el tercer trimestre, los usuarios de Teams estuvieron 30.000 millones de minutos, un promedio de más de cuatro horas por persona, haciendo cosas como participar en videoconferencias, trabajar en documentos compartidos y revisar reuniones. Dado el tiempo que normalmente lleva introducir en el mercado un nuevo software corporativo, Teams es prácticamente un éxito de la noche a la mañana y una nueva e importante puerta de entrada a la vida laboral digital.

    Microsoft "quiere ser el portal cautivo a través del cual se experimenta todo lo demás", dijo Jim Gaynor, analista de Directions on Microsoft, una firma de investigación independiente. "Lo intentaron repetidas veces. Teams es lo más cerca que han llegado".

    Crear un único "espacio de trabajo" como éste también es un eco de las ambiciones de Microsoft desde sus días en que dominaba las PC, dijo Wayne Kurtzman, analista de IDC: "Esta fue la promesa original de Windows: hemos completado el círculo".

    Teams apenas parecía un gran éxito antes de la pandemia. Se desarrolló por primera vez para competir con Slack, una aplicación de chat pionera en el ámbito laboral que amenazaba con hacer avances en el control de Microsoft sobre la información de los trabajadores. Luego, cuando llegó la pandemia, el video se convirtió en el principal impulsor del crecimiento de Teams.'
    ,'created_at' => Carbon::now()    
]);


DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Estas son las 4 tendencias tecnológicas que surgieron en plena pandemia',
    'subtitulo' => 'Deloitte analizó los cambios organizacionales y tecnológicos de las empresas en 2020.',
    'contenido' => 'Algunas tendencias tecnológicas este año surgieron en respuesta a los persistentes desafíos de TI y otras fueron producto de la adaptación a la nueva normal, pero todas van a impulsar un cambio organizacional significativo.





    FINANZAS Y EL FUTURO DE TI
    La estrategia tecnológica se ha ido convirtiendo en parte fundamental de la estrategia de negocios en las organizaciones. Cada vez más los líderes de TI y de Finanzas trabajan conjuntamente para desarrollar enfoques flexibles para innovar y operar de forma "ágil". Ya sea para apoyar innovación o generar las condiciones para la transformación digital, TI necesitará el apoyo de Finanzas para repensar de manera efectiva el gobierno/administración de la innovación tecnológica, para adaptarse a las metodologías ágiles y asegurar el capital creativo. Hay fuertes incentivos para que los CIOs y los CFOs encuentren formas de financiar la innovación de manera efectiva. Algunas compañías ya están adoptando esta tendencia y explorando nuevas posibilidades, obteniendo las ventajas competitivas de la innovación "agile".
    DIGITAL TWINS: UNIENDO LO FÍSICO Y LO DIGITAL
    La idea de utilizar modelos virtuales para optimizar procesos, productos o servicios no es nueva. Pero las organizaciones están descubriendo nuevas capacidades de simulación y modelado cada vez más sofisticadas, poder de visualización, mejor interoperabilidad y sensores de IoT (Internet de las cosas), y una mayor disponibilidad de plataformas y herramientas hacen que sea posible crear simulaciones con mayor nivel de detalle y dinamismo. Los gemelos digitales pueden aumentar la eficiencia en el proceso de fabricación, optimizar cadenas de suministro, transformar el mantenimiento predictivo, ayudar a remediar la congestión del tráfico y mucho más.

    LA ARQUITECTURA EMERGE
    Un número creciente de líderes en tecnología y C-suite están reconociendo que la arquitectura tecnológica es estratégicamente más importante que nunca. De hecho, para seguir siendo competitivos en los mercados que se ven impactados por la innovación tecnológica, las organizaciones deberán evolucionar sus enfoques a la arquitectura, un proceso que puede comenzar transformando el papel que juegan los arquitectos de tecnología en la empresa.


    PLATAFORMAS DE "EXPERIENCIA HUMANA"
    Las soluciones de Inteligencia Artificial están redefiniendo la forma en que experimentamos la tecnología. Históricamente, las computadoras no han podido correlacionar eventos con emociones humanas o factores emocionales, pero eso está cambiando a medida que los innovadores están agregando un cociente emocional al coeficiente intelectual de la tecnología, a escala. Combinando inteligencia artificial, técnicas de diseño centradas en el ser humano y tecnologías que se utilizan actualmente en la investigación neurológica para comprender mejor las necesidades humanas, las plataformas de experiencia humana podrán reconocer el estado emocional de un usuario y el contexto para responder adecuadamente.

    Por Alejandro Jaceniuk Socio de Deloitte, Enterprise Technology & Performance Leader Spanish Latin America.'
    ,'created_at' => Carbon::now()
]);



DB::table('posts')->insert([
    'user_id' => 1,
    'estado_id' => 1,
    'titulo' => 'Esta incubadora tech seleccionará 30 proyectos y les dará US$ 10.000 a cada uno: cómo sumarse',
    'subtitulo' => 'Se trata de Cites IMPULSA, que se enfocará en apoyar con mentoría y fondos a emprendimientos para PyMEs y cooperativas con énfasis en desarrollos y valores sociales.',
    'contenido' => 'Con la idea de abrir el abanico de la incubación empresaria a nuevos rubros y a emprendimientos en diversos estadíos, el grupo Sancor Seguros presentó ayer su nueva incubadora: Cites IMPULSA. Esta se enfocará en apoyar el desarrollo de Pyme, emprendimientos, cooperativas y grupos asociativos, con montos de hasta US$ 10.000 pero buscando especialmente apoyar proyectos que generen impacto en rubros como la salud, el agro, las compañías ligadas al conocimiento, las energías renovables y la industria aseguradora. Y siempre con un enfoque característico: poniendo énfasis en que generen impacto social y también que tengan en fuerte consideración la sustentabilidad ambiental.

    Vamos a enfocarnos en un área diferente y complementaria al segmento de empresas en el que se especializa CITES", le explico a Infotechnology Pablo Mazza, responsable de la iniciativa IMPULSA. Y agregó: "Seremos más abarcativos con las temáticas de los emprendimientos que se postulen. Y a los que nuestro comité de expertos elija para ser incubados, les ofreceremos una mezcla de apoyo en forma de networking, consultoría, mentoría y también financiamiento            
    En este último rubro la idea es dedicar montos de hasta US$ 10 mil, con una modalidad de "préstamo a mejor fortuna", donde el emprendimiento o cooperativa premiada se compromete a devolver la suma aportada por IMPULSA cuando las mejoras se reflejen en su balance económico.

    Según se detalló durante la presentación oficial de este lanzamiento -al que asistió Infotechnology-, "en el grupo Sancor consideramos que la Argentina es rica en recursos naturales y en talento personal. Pero tenemos una tasa "empresarial" baja: alrededor de 14 empresas cada 1.000 habitantes. Y de éstas pocas logran sortear los primeros cinco años de vida", resumió Alejandro Simón, actual CEO del grupo. "Y por eso necesitamos que nazcan más empresas, que sean capaces de generar más y mejor empleo. Justamente para aportar en este sentido diseñamos la idea de Cites IMPULSA".

    De acuerdo a Simón, se buscará que los emprendedores seleccionados -aunado al costado económico-, se enmarquen en ideas y conceptos que logren generar impacto social, pero bajo un marco de desarrollo sostenible en lo ambiental. Y Mazza agregó que esta iniciativa apunta a ser más federal que su "hermana mayor" de Cites, ya que incubarán ideas en toda la Argentina.

    Por otra parte, también están en tratativas con estados provinciales y municipales para apoyar a los seleccionados en forma conjunta, incluso doblando el aporte económico, tal como están negociando con Córdoba.

    Algo interesante es que si alguno de los emprendimientos incubados crece y lo amerita, el CITES original podría ofrecer tomarlo e incubarlo en una nueva etapa de crecimiento.
    Un buen resumen de este lanzamiento lo hizo, en pocas palabras, Nicolás Tognalli, gerente responsable de Cites, el hermano "mayor" de IMPULSA: 
    COMO, DÓNDE Y CUANDO
    Para postularse en Cites IMPULSA, el grupo abrió una web propia. Se trata de https://citesimpulsa.com.ar/. Según Pablo Mazza, la idea es comenzar a analizar los proyectos y seleccionar a los primeros ganadores lo antes posible. "Nuestra intención es comenzar a asignar recursos y asistir en forma virtual a los primeros emprendedores ya en el primer trimestre del 2021. Tenemos en nuestros planes trabajar en unos 30 proyectos de este tipo por año y la idea es que, en el mediano plazo, IMPULSA se vuelva un proyecto autosustentable".'
    ,'created_at' => Carbon::now()    
]);








    }
}
