<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Implantologia',
                'shortDescription' => 'L’Impiantologia è quella branca dell’odontoiatria che si preoccupa sostanzialmente di sostituire i denti andati perduti per qualsivoglia patologia tramite l’inserimento nell’osso mandibolare o mascellare di viti (fixture) in titanio di varia forma e superficie. Queste saranno le “radici artificiali” capaci di supportare la nuova dentatura.',
                'longDescription' => 'L’Impiantologia è quella branca dell’odontoiatria che si preoccupa sostanzialmente di sostituire i denti andati perduti per qualsivoglia patologia tramite l’inserimento nell’osso mandibolare o mascellare di viti (fixture) in titanio di varia forma e superficie. Queste saranno le “radici artificiali” capaci di supportare la nuova dentatura.' .PHP_EOL.
                'Senza entrare nel dettaglio di quella che è stata l’evoluzione che questa disciplina ha avuto nel corso degli anni, certamente però è possibile affermare che al giorno d’oggi, grazie alla continua ricerca scientifica, ha raggiunto un livello di affidabilità elevatissimo.' .PHP_EOL.
                'Uno, più o anche tutti i denti mancanti possono ricomparire con la tecnica implantologica più appropriata per ogni specifico caso. Ogni “situazione orale” infatti ha le sue particolari basi di partenza e relative richieste e aspettative e deve essere considerata sotto ogni suo aspetto.' .PHP_EOL.
                "In questo Studio dentistico chiunque necessiti di una riabilitazione protesica su impianti, sia che si tratti di un singolo elemento, sia che si tratti di un’intera arcata, potrà sfruttare lo “stato dell’arte” in implantologia grazie all’esperienza del Dottor Luca Giachin da molti anni impegnato in prima persona con la sua equipe clinica nella ricerca scientifica e nello sviluppo delle tecniche più innovative e sicure e sempre meno invasive e costose." .PHP_EOL.
                "Da più di 10 anni infatti lo Studio Dentistico Giachin utilizza tecniche chirurgiche e implantari per il ripristino di una funzione masticatoria con protesi fisse su impianti osteointegrati." .PHP_EOL.
                "I nostri pazienti in questo modo non sono costretti ad accettare protesi totali o rimovibili, aumentando il comfort masticatorio e psicologico. Sono sempre più frequenti i casi in cui si utilizza la tecnica dell’implantologia post-estrattiva con carico immediato. Tale tecnica prevede, in un unico tempo operatorio, l’estrazione dei denti compromessi, l’inserimento dell’impianto e il carico immediato con denti provvisori. In questo modo, il paziente sostituisce il suo dente naturale con un dente su impianto in un unico intervento, riducendo le complicanze, le terapie mediche, il disagio, lo stress." .PHP_EOL.
                "I pazienti che si sottopongono ad interventi di implantologia sono seguiti accuratamente, nei minimi dettagli, anche sotto l’aspetto di consigli e indicazioni per quel che riguarda il mantenimento igienico domiciliare che è fondamentale per la longevità del lavoro eseguito. Sono programmati richiami periodici gratuiti con controlli radiografici che permettono al medico e al paziente di garantirsi una continuità nell’efficacia del risultato." .PHP_EOL.
                "Per una scelta dettata dalla conoscenza della letteratura scientifica lo studio ha deciso di utilizzare prodotti implantari tedeschi di ottima qualità della Dentsply (lo studio è referente scientifico da anni per l’Italia nord-ovest per il prodotto).",
                'image' => url()
            ]
        ]);
    }
 }
