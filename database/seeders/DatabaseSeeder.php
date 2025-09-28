<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    
        DB::table('categories')->insert([
            ['name' => 'Tecnología'],
            ['name' => 'Política'],
            ['name' => 'Clima'],
            ['name' => 'Deportes'],
            ['name' => 'Economía'],
            ['name' => 'Internacional'],
            ['name' => 'Ciencia'],
            ['name' => 'Educación'],
            ['name' => 'Cultura'],

        ]);

        DB::table('news')->insert(
            
        [
             [
                'title' => 'Ley de Ciberseguridad: Expertos alertan sobre control militar',
                'author' =>'Miguel Fernandez',
                'description' => 'Tres análisis de tanques de análisis distintos, uno de la Mesa de Certeza Jurídica de la Iniciativa Guatemala No Se Detiene; otro de la Alianza por un Congreso Eficiente (que integra organismos como el Cien y Guatemala Visible) y otro de la firma de abogados ALTA, emitieron esta semana análisis técnico y jurídico sobre la Iniciativa de Ley 6347, conocida como Ley de Ciberseguridad.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Congreso-de-la-Republica.jpg?quality=52&w=1280&h=768&crop=1',
                'category_id' => 1,
            ],
             [
                'title' => 'Estos son los nuevos ciberdelitos que se castigarían en Guatemala con penas hasta de 30 años',
                'author' =>'Miguel Fernandez',
                'description' => 'Tres análisis de tanques de análisis distintos, uno de la Mesa de Certeza Jurídica de la Iniciativa Guatemala No Se Detiene; otro de la Alianza por un Congreso Eficiente (que integra organismos como el Cien y Guatemala Visible) y otro de la firma de abogados ALTA, emitieron esta semana análisis técnico y jurídico sobre la Iniciativa de Ley 6347, conocida como Ley de Ciberseguridad.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/08/experiencia-en-programacion-con-una-persona-que-trabaja-con-codigos-en-la-computadora.jpg?resize=1360,768',
                'category_id' => 1,
            ],
             [
                'title' => 'Fintech en Guatemala: 5 profesiones que buscan las aplicaciones que manejan dinero',
                'author' =>'Emilio Maldonado',
                'description' => 'Al momento de pagar con una tarjeta de crédito, o al realizar una compra a través de un comercio electrónico, entre 10 y 15 compañías intervienen simultáneamente para efectuar una transacción. Esto, según Gabriel Santos, presidente ejecutivo de Colombia Fintech, quien agrega que, en la actualidad, pequeños comercios pueden acceder a la economía digital gracias a plataformas tecnológicas. A partir de estas nuevas herramientas, Santos asegura que acceder a servicios es más eficiente y con menos intermediación. Tal es el caso de las remesas, que, mediante las fintech, podrían recibirse a una fracción del costo habitual.

Según Hilario Menéndez, cofundador de Paggo, el 60% del mercado no está bancarizado y, en cinco años, este sector podría estarlo mediante una fintech y no por un banco tradicional. Menéndez asegura que el crecimiento de las fintech ha sido exponencial, en comparación con el de un banco convencional',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/06/Guatemala-No-Se-Detiene-8.png',
                'category_id' => 1,
            ],
             [
                'title' => 'Estas son las nuevas oportunidades laborales que abren la IA y la automatización en Guatemala',
                'author' =>'Miguel Fernandez',
                'description' => 'Los puestos tecnológicos más demandados en Guatemala están vinculados a los cuatro verticales económicos en los que se ubica el empleo en la actualidad: el comercio, la manufactura, los servicios privados y la agricultura.
Según Claudia Cifuentes, integrante de la gremial de tecnología de la Cámara de Industria de Guatemala (CIG), la Industria 4.0 –como se denomina a estas áreas tecnológicas en crecimiento– “abarca desde la inteligencia artificial, el internet de las cosas, blockchain y fintech, hasta los drones y muchas otras tecnologías que ya no son emergentes, sino que están en plena expansión”.

La ejecutiva señala que la automatización ha cobrado gran relevancia en el país, ya que permite optimizar costos, tiempo, atención, experiencia del usuario y otros aspectos clave dentro de estas áreas de negocio.

Este es un extracto de la conversación que tuvo en el programa Guatemala No Se Detiene, transmitido por Guatevisión el pasado lunes.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/02/Guatemala-No-Se-Detiene-5.png',
                'category_id' => 1,
            ],
             [
                'title' => 'Empresarios industriales urgen resolución favorable en política arancelaria con EE. UU.',
                'author' =>'Miguel Fernandez',
                'description' => 'El entorno externo e interno, las iniciativas actuales —sobre todo en infraestructura—, la Ley de Competencia y el clima de negocios fueron parte de la perspectiva que brindó Enrique Font, presidente de la Cámara de Industria de Guatemala (CIG) para el período 2025-2027.

Font, quien fue juramentado el pasado jueves 24 de julio, sustituyó a Raúl Bouscayrol en la presidencia de la CIG. Esta es parte de la conversación con Prensa Libre.

En el contexto externo se enfrenta a la política arancelaria de EE. UU., ¿qué piensa?

Sin lugar a duda hay una expectativa de lo que pueda pasar con los aranceles con Estados Unidos, y hemos visto las cartas oficiales de resolución que se están aplicando a determinados países y con Guatemala aún no se ha dado la información que cual será la decisión.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/07/INDUSTRIA-DE-GUATEMALA-PL-HEMEROTECA.jpg',
                'category_id' => 2,
            ],
            [
            'title' => 'Aarón Herrera en entrevista con su club: “Jugar para Guatemala significa todo para mí”',
            'author' =>'Miguel Linares',
            'description' => 'Aarón Herrera, defensor de la Selección Nacional de Guatemala, habló recientemente sobre lo que representa para él vestir la camiseta nacional y el profundo vínculo que siente con su tierra paterna. Nacido en Nuevo México, Estados Unidos, Herrera explicó cómo su herencia guatemalteca ha marcado su vida y su carrera futbolística.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/aaron-herrera-jugador-de-Guatemala.jpg',
            'category_id' => 4,
            ],
            [
            'title' => ' Messi firma nuevo doblete ante el DC United de Aaron Herrera',
            'author' =>'Miguel Linares',
            'description' => 'Lionel Messi volvió a ser protagonista en la Major League Soccer al marcar un doblete en la victoria del Inter Miami 3-2 frente al DC United en el Chase Stadium, un duelo que también tuvo presencia guatemalteca gracias a la titularidad de Aaron Herrera.

El astro argentino fue decisivo para que el equipo dirigido por Javier Mascherano sumara tres puntos que lo mantienen en la pelea por los primeros puestos de la Conferencia Este. Messi alcanzó los 22 goles en la temporada y se afianza como máximo anotador de la MLS 2025.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/MLS-SOC-SPO-INTER-MIAMI-CF-V-D.C.-UNITED_96838091.jpg?resize=1360,768',
            'category_id' => 4,
            ],
            [
            'title' => 'Son Heung-min brilla en la MLS con un triplete en la victoria de LAFC',
            'author' =>'Herberth Morales',
            'description' => 'La nueva estrella de Los Angeles FC y de la Major League Soccer (MLS), el surcoreano Son Heung-min, anotó su primer triplete en la contundente victoria de su equipo por 4-1 frente al Real Salt Lake.

El exjugador del Tottenham, ganador de una Bota de Oro en la Premier League, ha tenido un impacto inmediato desde su llegada a la liga estadounidense.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/2235448117.jpg?resize=1360,768',
            'category_id' => 4,
            ],
            [
            'title' => 'Así fue la jugada del polémico penalti que dio origen al segundo gol del Real Madrid ante el Marsella',
            'author' =>'Jose Linares',
            'description' => 'El Real Madrid logró una sufrida victoria por 2-1 frente al Olympique de Marsella en su estreno en la Champions League 2025-2026, en el Santiago Bernabéu.

El conjunto blanco comenzó perdiendo tras un gol del estadounidense Tim Weah al minuto 22, producto de un error en la salida de Arda Güler. Sin embargo, Kylian Mbappé igualó el marcador seis minutos después desde el punto penal, tras una falta cometida sobre el brasileño Rodrygo.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/20250916-dc6145109a8b2dde79be634bf20ae68cfbb2af42-1.jpg?resize=1360,768',
            'category_id' => 4,
            ],
            [
            'title' => 'Simeone se encara con un aficionado en la derrota del Atlético de Madrid frente al Liverpool en Champions',
            'author' =>'Rodrigo Linares',
            'description' => 'Liverpool y Atlético de Madrid protagonizan un épico duelo de cinco goles en Anfield, en el segundo día de la primera jornada de la Liga de Campeones, Inglaterra vivió una auténtica “noche mágica” de Champions League en el mítico estadio de Anfield.

El duelo estelar entre Liverpool y Atlético de Madrid fue una montaña rusa de emociones, donde el equipo dirigido por Diego Pablo Simeone estuvo cerca de llevarse un valioso punto, pero lo perdió en los últimos instantes del partido, lo que provocó una explosiva reacción del técnico argentino contra un aficionado local.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/AFP_74VX3UQ.jpg?resize=1360,768',
            'category_id' => 4,
            ],
            [
            'title' => 'XX Congreso Industrial: En qué consiste la mesa de inversión que proponen los industriales para destrabar y agilizar proyectos',
            'author' =>'Rosa Barrios',
            'description' => 'La Cámara de Industria de Guatemala (CIG) propuso al presidente de la República, Bernardo Arévalo, crear una mesa técnica para efectuar trabajo conjunto entre el sector industrial y el Gobierno, para que pueda fluir la inversión privada.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Congreso-Industrial-2025-Presidente-Bernardo-Arevalo-presidente-CIG-Enrique-Font.jpg?quality=52&w=1280&h=768&crop=1',
            'category_id' => 5,
            ],
            [
            'title' => 'Invierten US$20 millones en un nuevo centro de datos y tendrá capacidad de procesar inteligencia artificial',
            'author' =>'Rosa Barrios',
            'description' => 'La compañía Kio Data Centers, que ya opera en Guatemala desde hace 13 años, inició la inversión de más de US$20 millones para un nuevo centro de datos con lo cual ampliará su capacidad de servicios en el país.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Kio-Data-Center-1-Foto-cortesia.jpeg?resize=1360,768',
            'category_id' => 5,
            ],
            [
            'title' => 'Guatemala recibirá inversión de US$300 millones para construir centro de datos de última generación',
            'author' =>'Rosa Barrios',
            'description' => 'Guatemala recibirá el primer centro de datos de cuarta generación de la región. La inversión en la fase inicial será de US$300 millones y, según Janio Rosales, CEO de Innovaton Strategies y socio y miembro de la Junta Directiva del consorcio con Aurum Equity Partners y Bold Capital Group, se trata de una de las inversiones en tecnología más grandes que se realizarán en Centroamérica.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/08/Guatemala-No-Se-Detiene-7.png',
            'category_id' => 5,
            ],
            [
            'title' => 'Guatemala atrapada en el bajo crecimiento por falta de acceso en educación e inversión en infraestructura',
            'author' =>'Rosa Barrios',
            'description' => 'Durante la conferencia inaugural del XX Congreso Industrial, Miguel Ángel Santos, decano de la Escuela de Gobierno del Tecnológico de Monterrey, compartió un estudio revelador sobre la economía guatemalteca. ',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/MIGUEL-ANGEL-SANTOS-CONGRESO-INDUSTRIAL-3.jpeg?quality=52&w=1280&h=768&crop=1',
            'category_id' => 5,
            ],
            [
            'title' => 'Empresario Juan José Gutiérrez Mayorga recibe el premio Industrial Distinguido 2025',
            'author' =>'Rosa Barrios',
            'description' => 'La Cámara de Industria de Guatemala concluyó esta noche el XX Congreso Industrial con la entrega de reconocimientos a líderes, destacando a Juan José Gutiérrez Mayorga como Industrial Distinguido 2025.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/GANADORES-Y-GALARDONADOS-CONGRESO-INDUSTRIAL-2025.jpeg?quality=52&w=1280&h=768&crop=1',
            'category_id' => 5,
            ],
            [
            'title' => 'Elon Musk y el príncipe Andrés aparecen en nuevas revelaciones sobre el caso Epstein',
            'author' =>'BBC News Mundo',
            'description' => 'El multimillonario Elon Musk y el príncipe Andrés aparecen en los nuevos archivos publicados por demócratas del Congreso vinculados con el fallecido condenado por delitos sexuales Jeffrey Epstein.

Los archivos fueron entregados al Comité de Supervisión de la Cámara de Representantes por el patrimonio de Jeffrey Epstein y parecen mostrar que Musk fue invitado a la isla del financiero en diciembre de 2014.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/89472f60-9b53-11f0-92db-77261a15b9d2.jpg',
            'category_id' => 6,
            ],
            [
            'title' => 'Varios estados de EE. UU. refuerzan medidas de emergencia ante inminente formación del huracán Imelda',
            'author' =>'BBC News Mundo',
            'description' => 'Varios estados del sureste de Estados Unidos se mantienen en alerta ante la posible formación del huracán Imelda, un sistema tropical que avanza desde el Caribe con potencial de fortalecerse e impactar tierra en los próximos días.

La amenaza de intensas lluvias, marejadas y vientos llevó a la declaración de estado de emergencia en Carolina del Sur, mientras otras entidades activaron planes de contingencia. Las proyecciones meteorológicas advierten sobre riesgos de inundaciones y daños en infraestructura, especialmente en zonas costeras del litoral atlántico.

',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Huracanes.jpg',
            'category_id' => 6,
            ],
            [
            'title' => 'Cómo el ADN y un casquillo identificaron quién asesinó a cuatro adolescentes en tienda de yogur hace 34 años',
            'author' =>'BBC News Mundo',
            'description' => 'Las autoridades de Austin, Texas, anunciaron un avance en uno de los casos más emblemáticos y desconcertantes de la ciudad: el asesinato de cuatro adolescentes en una tienda de yogurt en el 1991.

Tras 34 años de investigación, las pruebas de ADN identificaron a Robert Eugene Brashers, un asesino serial que se suicidó en 1999, como el principal sospechoso del crimen que conmocionó a la capital texana.

',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/shutterstock_1154369989.jpg',
            'category_id' => 6,
            ],
            [
            'title' => 'Donald Trump impone arancel del 100% a los medicamentos: ¿Cómo afectará a otros países?',
            'author' =>'BBC News Mundo',
            'description' => 'Durante la noche del pasado jueves 25 de septiembre, el presidente de los Estados Unidos, Donald Trump, tomó la decisión de revivir su guerra comercial global al anunciar nuevos aranceles de hasta el 100% a los medicamentos, así como tasas a los camiones de carga pesada y a todos los muebles que se fabrican en el extranjero.

De acuerdo con la agencia de noticias AFP, esta nueva medida, comunicada directamente por el mandatario republicano de 79 años, se convirtió en la política comercial más severa del magnate neoyorquino desde la imposición de aranceles recíprocos, a principios de abril, a prácticamente todos los socios comerciales de los Estados Unidos.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Medicamentos.jpg',
            'category_id' => 6,
            ],
            [
            'title' => 'Copa Mundial del 2026: Las sedes que Trump considera inseguras y podrían ser reasignadas',
            'author' =>'BBC News Mundo',
            'description' => 'El jueves 25 de septiembre, el presidente de los Estados Unidos, Donald Trump, anunció públicamente que podría considerar el traslado de los partidos de la Copa Mundial de Futbol 2026 desde algunas ciudades que considera “un poco peligrosas”, dado que EE. UU. es uno de los países organizadores del torneo.

Junto a sus vecinos del norte y del sur, Canadá y México, el territorio de los Estados Unidos albergará la mayoría de partidos del principal torneo internacional oficial de futbol masculino a nivel de selecciones nacionales, debido a que contará con un total de once sedes, frente a las tres ciudades mexicanas y a las dos sedes canadienses.',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Donald-Trump-Mundial.jpg?resize=1360,768',
            'category_id' => 6,
            ]

        ]
    );

    DB::table('news_settings')->insert(
    [
        ['news_id' => 1,  'font_size' => '12px', 'font_color' => '#ae8f05ff', 'icon' => 'heart'],
        ['news_id' => 2,  'font_size' => '12px', 'font_color' => '#ff5733',   'icon' => 'heart'],
        ['news_id' => 3,  'font_size' => '12px', 'font_color' => '#33ff57',   'icon' => 'heart'],
        ['news_id' => 4,  'font_size' => '12px', 'font_color' => '#3357ff',   'icon' => 'heart'],
        ['news_id' => 5,  'font_size' => '12px', 'font_color' => '#ff33a6',   'icon' => 'heart'],
        ['news_id' => 6,  'font_size' => '12px', 'font_color' => '#33fff6',   'icon' => 'heart'],
        ['news_id' => 7,  'font_size' => '12px', 'font_color' => '#a633ff',   'icon' => 'heart'],
        ['news_id' => 8,  'font_size' => '12px', 'font_color' => '#ffd633',   'icon' => 'heart'],
        ['news_id' => 9,  'font_size' => '12px', 'font_color' => '#00cc99',   'icon' => 'heart'],
        ['news_id' => 10, 'font_size' => '12px', 'font_color' => '#cc0066',   'icon' => 'heart'],
        ['news_id' => 11, 'font_size' => '12px', 'font_color' => '#0099cc',   'icon' => 'heart'],
        ['news_id' => 12, 'font_size' => '12px', 'font_color' => '#6600cc',   'icon' => 'heart'],
        ['news_id' => 13, 'font_size' => '12px', 'font_color' => '#cc9900',   'icon' => 'heart'],
        ['news_id' => 14, 'font_size' => '12px', 'font_color' => '#ff6600',   'icon' => 'heart'],
        ['news_id' => 15, 'font_size' => '12px', 'font_color' => '#009933',   'icon' => 'heart'],
        ['news_id' => 16, 'font_size' => '12px', 'font_color' => '#ffccff',   'icon' => 'heart'],
        ['news_id' => 17, 'font_size' => '12px', 'font_color' => '#006666',   'icon' => 'heart'],
        ['news_id' => 18, 'font_size' => '12px', 'font_color' => '#cc3333',   'icon' => 'heart'],
        ['news_id' => 19, 'font_size' => '12px', 'font_color' => '#333399',   'icon' => 'heart'],
        ['news_id' => 20, 'font_size' => '12px', 'font_color' => '#66cc33',   'icon' => 'heart'],

    ]);

    }
}
