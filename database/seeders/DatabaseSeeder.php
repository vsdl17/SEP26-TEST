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

    
        DB::table('category')->insert([
            ['name' => 'Internet'],
            ['name' => 'Política'],
            ['name' => 'Clima'],

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
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Congreso-de-la-Republica.jpg?quality=52&w=1280&h=768&crop=1',
                'category_id' => 1,
            ],
             [
                'title' => 'Ley de Ciberseguridad: Expertos alertan sobre control militar',
                'author' =>'Julia Reyes',
                'description' => 'La iniciativa de ley 6347 de ciberseguridad, que recibió dictamen favorable este 26 de agosto por parte de la Comisión de Asuntos de Seguridad Nacional del Congreso, propone tipificar y reforzar once delitos.

Según Ana Antillón, coordinadora de la mesa de Certeza Jurídica de Guatemala No Se Detiene, el país ha estado rezagado en materia legislativa relacionada con la transformación digital, especialmente en aspectos como la protección de datos e información.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/08/experiencia-en-programacion-con-una-persona-que-trabaja-con-codigos-en-la-computadora.jpg?resize=1360,768',
                'category_id' => 1,
            ],
             [
                'title' => 'Ley de Ciberseguridad: Expertos alertan sobre control militar',
                'author' =>'Miguel Fernandez',
                'description' => 'Tres análisis de tanques de análisis distintos, uno de la Mesa de Certeza Jurídica de la Iniciativa Guatemala No Se Detiene; otro de la Alianza por un Congreso Eficiente (que integra organismos como el Cien y Guatemala Visible) y otro de la firma de abogados ALTA, emitieron esta semana análisis técnico y jurídico sobre la Iniciativa de Ley 6347, conocida como Ley de Ciberseguridad.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/09/Congreso-de-la-Republica.jpg?quality=52&w=1280&h=768&crop=1',
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
                'title' => 'Ley de Ciberseguridad: Expertos alertan sobre control militar',
                'author' =>'Miguel Fernandez',
                'description' => 'El entorno externo e interno, las iniciativas actuales —sobre todo en infraestructura—, la Ley de Competencia y el clima de negocios fueron parte de la perspectiva que brindó Enrique Font, presidente de la Cámara de Industria de Guatemala (CIG) para el período 2025-2027.

Font, quien fue juramentado el pasado jueves 24 de julio, sustituyó a Raúl Bouscayrol en la presidencia de la CIG. Esta es parte de la conversación con Prensa Libre.

En el contexto externo se enfrenta a la política arancelaria de EE. UU., ¿qué piensa?

Sin lugar a duda hay una expectativa de lo que pueda pasar con los aranceles con Estados Unidos, y hemos visto las cartas oficiales de resolución que se están aplicando a determinados países y con Guatemala aún no se ha dado la información que cual será la decisión.',
                'image' => 'https://www.prensalibre.com/wp-content/uploads/2025/07/INDUSTRIA-DE-GUATEMALA-PL-HEMEROTECA.jpg',
                'category_id' => 2,
            ],

        ]
    );

    DB::table('news_settings')->insert(
        [
            [
                'news_id'    => 1,
                'font_size'  => '12px',
                'font_color' => '#000B58',
                'icon' => 'heart'
            ],
            [
                'news_id'    => 2,
                'font_size'  => '12px',
                'font_color' => '#1f37ebff',
                'icon' => 'heart'
            ],[
                'news_id'    => 3,
                'font_size'  => '12px',
                'font_color' => '#09583fff',
                'icon' => 'heart'
            ],[
                'news_id'    => 4,
                'font_size'  => '12px',
                'font_color' => '#9a0993ff',
                'icon' => 'heart'
            ],[
                'news_id'    => 5,
                'font_size'  => '12px',
                'font_color' => '#9be02aff',
                'icon' => 'heart'
            ],[
                'news_id'    => 6,
                'font_size'  => '12px',
                'font_color' => '#6f0508ff',
                'icon' => 'heart'
            ],[
                'news_id'    => 7,
                'font_size'  => '12px',
                'font_color' => '#ae8f05ff',
                'icon' => 'heart'
            ],

        ]);

    }
}
