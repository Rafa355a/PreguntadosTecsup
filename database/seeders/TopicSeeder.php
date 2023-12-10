<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            'Programación' => [
                'La definición de algoritmo es...' => [
                    [
                        'name' => 'Un tipo de código informático',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Una secuencia de instrucciones que representan un modelo de solución para determinado tipo de problemas, incluyendo todos los pasos necesarios.',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Un lenguaje de programación',
                        'is_correct' => false
                    ],
                ],
                '¿Qué es C++?'  => [
                    [
                        'name' => 'Un juego',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Un programa',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Un lenguaje de programación',
                        'is_correct' => true
                    ],
                ],
                '¿Qué es una variable?'  => [
                    [
                        'name' => 'Un valor o dato',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Un espacio dentro del espacio de memoria ram',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Un lenguaje',
                        'is_correct' => false
                    ],
                ],
                'En javascript, la sentencia for sirve para'  => [
                    [
                        'name' => 'Repetir la ejecución de instrucciones',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Cargar datos en un arreglo',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ninguna de las anteriores',
                        'is_correct' => false
                    ],
                ],
                'En un lenguaje de programación las constantes son...'  => [
                    [
                        'name' => 'Datos que varían',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Datos regulares',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Datos que no cambian en el proceso',
                        'is_correct' => true
                    ],
                ],
                'Un diagrama de flujo es ...'  => [
                    [
                        'name' => 'la forma de resolver un problema',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La representación gráfica de un problema',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'El proceso de diseño de un algoritmo',
                        'is_correct' => false
                    ],
                ],
                '¿Qué tipo de dato es el ejemplo A=5?'  => [
                    [
                        'name' => 'char',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'integer',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'string',
                        'is_correct' => false
                    ],
                ],
                '¿Para qué sirve los lenguajes de programación de tipo general?'  => [
                    [
                        'name' => 'Crear y facilitar datos',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Crear diferentes mecanismos',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Crear distintos tipos de aplicaciones',
                        'is_correct' => true
                    ],
                ],
                'El número en binario 1010 corresponde'  => [
                    [
                        'name' => '10 en decimal',
                        'is_correct' => true
                    ],
                    [
                        'name' => '8 en decimal',
                        'is_correct' => false
                    ],
                    [
                        'name' => '7 en decimal',
                        'is_correct' => false
                    ],
                ],
                'Un &quot;array&quot; es...'  => [
                    [
                        'name' => 'Un tipo de dato estructurado que almacena datos, del mismo tipo y relacionados.',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Una estructura que me permite repetir instrucciones la cantidad de veces que quiera',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ninguna de las anteriores',
                        'is_correct' => false
                    ],
                ]
            ],
            'Historia' => [
                '¿Con qué nombre se conoce el escándalo que obligó al presidente estadounidense Richard Nixon a dimitir?'  => [
                    [
                        'name' => 'Vietnam',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'NixonPrecess',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Watergate',
                        'is_correct' => true
                    ],
                ],
                '¿Qué emperador romano legalizó el cristianismo y puso fin a la persecución de los cristianos?'  => [
                    [
                        'name' => 'Nerón',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Constanstino',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Adriano',
                        'is_correct' => false
                    ],
                ],
                '¿Qué hito informático de 1969 cambiaría radicalmente el curso de la historia de la humanidad?'  => [
                    [
                        'name' => 'El primer router wi-fi',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La primera computadora personal',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Internet',
                        'is_correct' => true
                    ],
                ],
                '¿Quién fue el primer Presidente de Estados Unidos?'  => [
                    [
                        'name' => 'George Washington',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Abraham Lincoln',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Andrew Jackson',
                        'is_correct' => false
                    ],
                ],
                '¿Por qué es significativo el Poema de Gilgamesh?'  => [
                    [
                        'name' => 'Fue un libro de estrategia militar de 500 páginas que sirvió en la antigua Mesopotamia',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Es la primera obra épica que hace referencia a la inmortalidad y la percepción humana del alma',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'El tratado más antiguo que existe sobre el Inframundo.',
                        'is_correct' => false
                    ],
                ],
                '¿Cuál es el nombre de la famosa batalla donde Napoleón Bonaparte fue derrotado?'  => [
                    [
                        'name' => 'La batalla de Hstings',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La batalla de Álamo',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La batalla de Waterloo',
                        'is_correct' => true
                    ],
                ],
                '¿A través de qué río africano se alzó el antiguo Egipto?'  => [
                    [
                        'name' => 'Amazonas',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Tigris',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Nilo',
                        'is_correct' => true
                    ],
                ],
                '¿A qué filósofo griego se atribuye la famosa obra “La República”?'  => [
                    [
                        'name' => 'Platón',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Sócrates',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Aristótleles',
                        'is_correct' => false
                    ],
                ],
                '¿En qué año se disolvió la Unión Soviética?'  => [
                    [
                        'name' => 'En 1987',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'En 1989',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'En 1991',
                        'is_correct' => true
                    ],
                ],
                '¿Qué científico es considerado el Padre de la Bomba Atómica?'  => [
                    [
                        'name' => 'Albert Einsein',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Robert Openheimer',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Leó Szilárd',
                        'is_correct' => false
                    ],
                ]
            ],
            'Biología' => [
                '¿Qué contienen los cloroplastos de las células vegetales?'  => [
                    [
                        'name' => 'Clorofila',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Agua',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Sábila',
                        'is_correct' => false
                    ],
                ],
                '¿Qué es la malacología?'  => [
                    [
                        'name' => 'La ciencia que estudia los hongos',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La ciencia que estudia los molusculos',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'La ciencia que estudia los ácaros',
                        'is_correct' => false
                    ],
                ],
                '¿Qué significan las siglas ADN?'  => [
                    [
                        'name' => ' Ácido deoxinucleico',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ácido desorribonucleico',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ácido desoxirribonucleico',
                        'is_correct' => true
                    ],
                ],
                'Todos los organismos en el reino Animalia son:'  => [
                    [
                        'name' => 'Multicelulares y autótrofos',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Multicelulares y autótrofos',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Unicelulares y heterótrofos',
                        'is_correct' => false
                    ],
                ],
                '¿Qué es un cardumen?'  => [
                    [
                        'name' => 'Una especie de planta',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Un banco de peces',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Una parte del abdomen de los insectos',
                        'is_correct' => false
                    ],
                ],
                'El sistema de clasificación taxonómica actual fue ideado por:'  => [
                    [
                        'name' => 'Darwin',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Pateur',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Linneo',
                        'is_correct' => false
                    ],
                ],
                '¿Cuál de los siguientes animales tiene incisivos que continúan creciendo toda su vida?'  => [
                    [
                        'name' => 'Morsa',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Hámster',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Elefante',
                        'is_correct' => false
                    ],
                ],
                '¿Cuánto vive un erizo?'  => [
                    [
                        'name' => 'Aproximadamente entre 4 y 5 años',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Aproximadamente entre 7 y 8 años',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Aproximadamente entre 9 y 12 años',
                        'is_correct' => false
                    ],
                ],
                '¿Dónde realizan las plantas la fotosíntesis?'  => [
                    [
                        'name' => 'En las hojas',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'En la raíz',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'En el aire',
                        'is_correct' => false
                    ],
                ],
                '¿Qué músculo impulsa la sangre por todo nuestro cuerpo?'  => [
                    [
                        'name' => 'El cerebro',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Los pulmones',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'El corazón',
                        'is_correct' => true
                    ],
                ]
            ],
            'Deporte' => [
                '¿Cómo se llama en tenis un punto de saque directo?'  => [
                    [
                        'name' => 'Revés',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Love',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ace',
                        'is_correct' => true
                    ],
                ],
                'En natación, ¿cuánto mide de largo una piscina de competición para olimpiadas y mundiales?'  => [
                    [
                        'name' => '50 metros',
                        'is_correct' => true
                    ],
                    [
                        'name' => '25 metros',
                        'is_correct' => false
                    ],
                    [
                        'name' => '30 metros',
                        'is_correct' => false
                    ],
                ],
                '¿Con cuántos jugadores en pista juega un equipo de voleibol?'  => [
                    [
                        'name' => '5',
                        'is_correct' => false
                    ],
                    [
                        'name' => '9',
                        'is_correct' => false
                    ],
                    [
                        'name' => '6',
                        'is_correct' => true
                    ],
                ],
                '¿Cómo se llama en golf cuando completas un hoyo en un lanzamiento menos que el par del hoyo?'  => [
                    [
                        'name' => 'Albatros',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Birdie',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Eagle',
                        'is_correct' => false
                    ],
                ],
                'Las tres modalidades de la esgrima son: sable, espada y ...'  => [
                    [
                        'name' => 'Estoque',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Florete',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Estilo lbre',
                        'is_correct' => false
                    ],
                ],
                '¿Cómo se llama en béisbol cuando un bateador golpea la bola y ésta sale del campo de juego, lo que le permite recorrer todas las bases con facilidad?'  => [
                    [
                        'name' => 'Strike',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Hit',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Home run',
                        'is_correct' => true
                    ],
                ],
                '¿A qué distancia está el punto de penalty de la portería en fútbol?'  => [
                    [
                        'name' => '7 metros',
                        'is_correct' => false
                    ],
                    [
                        'name' => '11 metros',
                        'is_correct' => true
                    ],
                    [
                        'name' => '12 metros',
                        'is_correct' => false
                    ],
                ],
                'Completa esta frase de baloncesto: &quot;El arbitro pitó _____ segundos en la zona y el equipo local perdió el balón&quot;'  => [
                    [
                        'name' => 'Cinco',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Venticuatro',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Tres',
                        'is_correct' => true
                    ],
                ],
                'Si hablamos del jugador boya, estamos hablando de...'  => [
                    [
                        'name' => 'Boleibol',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Hockey sobre patines',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Waterpolo',
                        'is_correct' => true
                    ],
                ],
                '¿Cómo se llama en rugby la lucha frente a frente de dos grupos de jugadores de los dos equipos que empujan para obtener el balón sin tocarlo con la mano?'  => [
                    [
                        'name' => 'Placaje',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Melé',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Ensayo',
                        'is_correct' => false
                    ],
                ]
            ],
            'Física' => [
                'Un poco de historia. ¿Qué sabio griego creía que la única ley básica que gobernaba el universo era el principio del cambio y que nada permanecía en el mismo estado indefinidamente?'  => [
                    [
                        'name' => 'Tales de Mileto',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Heráclito',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Aristóteles',
                        'is_correct' => false
                    ],
                ],
                'El método científico se usa en todas las ciencias, incluidas la física y la psicología.'  => [
                    [
                        'name' => 'Verdadero',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Falso, en física no',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ninguna de las anteriores',
                        'is_correct' => false
                    ],
                ],
                '¿Cómo se llama el instrumento que mide y registra la humedad relativa del aire?'  => [
                    [
                        'name' => 'Barómetro',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Hidrómetro',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Higrómetro',
                        'is_correct' => true
                    ],
                ],
                'Todo cuerpo que cae libremente en el vacío se caracteriza por tener...'  => [
                    [
                        'name' => 'Aceleración constante y velocidad variable',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Fuerza variable y velocidad decreciente',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Energía potencial constante y aceleración crecient...',
                        'is_correct' => false
                    ],
                ],
                'Hablando de fuerzas... ¿cuál es la que mantiene unidas las moléculas de un cuerpo?'  => [
                    [
                        'name' => 'La fuerza de gravedad',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La fuerza de cohesión',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'La fuerza de adhesión',
                        'is_correct' => false
                    ],
                ],
                '¿Cuál es la distancia más pequeña posible en mecánica cuántica?'  => [
                    [
                        'name' => 'Tiempo de Wearden',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Espuma cuántica',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Longitud de Planck',
                        'is_correct' => true
                    ],
                ],
                '¿Qué dos partículas elementales se describen como &lt;sin masa&gt;?'  => [
                    [
                        'name' => 'Fotón y gluón',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Muón y neutrino',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Electrón y protón',
                        'is_correct' => false
                    ],
                ],
                '¿Cuál de estos fenómenos inspiró a Albert Einstein en su desarrollo de la relatividad general?'  => [
                    [
                        'name' => 'Ver a dos trenes moverse en direcciones opuestas',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Ver a un hombre caerse de un tejado',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'La vibración de las cuerdas en un violín',
                        'is_correct' => false
                    ],
                ],
                '¿El tiempo va siempre hacia adelante?'  => [
                    [
                        'name' => 'Siempre',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'No',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'En teoría...sí',
                        'is_correct' => true
                    ],
                ],
                '¿Qué es la hidrostática?'  => [
                    [
                        'name' => 'Cantidad de masa encerrada en un volumen',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Presión de los líquidos a todas las direcciones',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Cuerpo de masa que crece de una forma',
                        'is_correct' => false
                    ],
                ]
            ],
            'Comida' => [
                'Originario del Oriente Medio, el falafel es una de las comidas callejeras favoritas de todo el mundo. ¿Cuál es el ingrediente principal del falafel?'  => [
                    [
                        'name' => 'Las semillas de sésamo',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'La harina',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Los garbanzos',
                        'is_correct' => true
                    ],
                ],
                'Las arepas son pasteles de maíz a menudo rellenos con ingredientes como queso, verduras y carne. ¿Qué 2 países dicen haber inventado este delicioso plato?'  => [
                    [
                        'name' => 'Colombia y Venezuela',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Venezuela y Argentina',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Chile y Colombia',
                        'is_correct' => false
                    ],
                ],
                'La comida callejera más popular del Perú, y éxito de exportación culinaria, es sin duda el ceviche. En este plato, ¿el pescado crudo se cura agregándole qué ingrediente?'  => [
                    [
                        'name' => 'Vinagre',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Zumos cítricos',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Aceite caliente',
                        'is_correct' => false
                    ],
                ],
                '¿En qué país se considera de mala educación comer mientras se camina (con algunas excepciones)?'  => [
                    [
                        'name' => 'Italia',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'China',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Japón',
                        'is_correct' => true
                    ],
                ],
                'En Italia, ¿los arancini son unas albóndigas fritas de qué?'  => [
                    [
                        'name' => 'Espaguetis',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Risotto',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Aceitunas',
                        'is_correct' => false
                    ],
                ],
                '¿En qué país se considera de mala educación comer mientras se camina (con algunas excepciones)?'  => [
                    [
                        'name' => 'Italia',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'China',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Japón',
                        'is_correct' => true
                    ],
                ],
                'Un buen mate se prepara con el agua...'  => [
                    [
                        'name' => 'A 80 grados',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Hirviendo',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Tibia',
                        'is_correct' => false
                    ],
                ],
                '¿Qué otro país nos disputa la invención del argentinísimo dulce de leche?'  => [
                    [
                        'name' => 'Chile',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Brasil',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Uruguay',
                        'is_correct' => true
                    ],
                ],
                'Una milanesa con jamón, queso y salsa de tomate se llama...'  => [
                    [
                        'name' => 'Milanesa siciliana',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Milanesa napolitana',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Milanesa maradoniana',
                        'is_correct' => false
                    ],
                ],
                '¿Cuáles son los ingredientes más comunes de toda empanada de carne?'  => [
                    [
                        'name' => 'Carne picada, huevos, cebollas y aceitunas',
                        'is_correct' => true
                    ],
                    [
                        'name' => 'Carne picada, huevos, tomate y aceitunas',
                        'is_correct' => false
                    ],
                    [
                        'name' => 'Carne picada, huevos, uva y choclo',
                        'is_correct' => false
                    ],
                ]
            ],
        ];

        foreach ($topics as $topic => $questions) {
            $newTopic = \App\Models\Topic::create([
                'name' => $topic,
            ]);

            foreach ($questions as $question => $options) {
                $newTopic->questions()->create([
                    'name' => $question,
                    'options' => $options,
                ]);
            }
        }
    }
}
