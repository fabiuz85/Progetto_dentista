<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collaborators')->insert([
            [
                'name' => 'Dr.Luca',
                'surname' => 'Giachin',
                'role' => 'Odontoiatra',
                'age' => 30,
                'description' => 'Dottor Luca Giachin, titolare dello Studio Dentistico, Laureato in Odontoiatria presso l’ Università di Genova il 31 Maggio 1988 e iscritto all’albo di Odontoiatria dal 12/7/1988.'
                                .PHP_EOL.
                                'Esegue tutte le tecniche più conosciute e affermate nel campo dell’Odontoiatria, anche tramite l’utilizzo di apparecchiature di ultima generazione e soprattutto grazie all’efficienza ed affidabilità del proprio staff.',
                'twitter' => 'https://twitter.com/dottlucagiachin',
                'facebook' => 'https://www.facebook.com/studiodentisticogiachin',
                'instagram' => 'https://www.instagram.com/studiodentistico_dott.giachin/',
                'googlePlus' => 'https://google.com/+studiodentisticogiachingenova',
                'portrait' => '/media/portraits/Luca-Giachin.jpg'
            ],
            [
                'name' => 'Olga',
                'surname' => 'Zavylova',
                'role' => 'Segretaria',
                'age' => 35,
                'description' => 'Mi chiamo Olga Zavylova'
                                .PHP_EOL.
                                'Sono di origini russe, mi sono trasferita in Italia nel 2016 per lo studio universitario.  Sono la segretaria del Dott. Luca Giachin dal 2020.'
                                .PHP_EOL.
                                'Mi prendo cura del paziente dall’accoglienza fino alla fine dei trattamenti, creo preventivi e metodi di pagamento su misura ed a seconda delle esigenze del paziente, inoltre mi occupo della gestione delle pratiche assicurative dei nostri pazienti convenzionati.',
                'twitter' => 'https://twitter.com/dottlucagiachin',
                'facebook' => 'https://www.facebook.com/studiodentisticogiachin',
                'instagram' => 'https://www.instagram.com/studiodentistico_dott.giachin/',
                'googlePlus' => 'https://google.com/+studiodentisticogiachingenova',
                'portrait' => '/media/portraits/Olga-Zavylova.jpg'
            ],
            [
                'name' => 'Daniela',
                'surname' => 'Damanti',
                'role' => 'Assistente alla Poltrona',
                'age' => 28,
                'description' => 'Mi chiamo Daniela Damanti.'
                                .PHP_EOL.
                                'Sono nata a Genova e sono assistente alla poltrona del Dott. Giachin da più di venti anni.'
                                .PHP_EOL.
                                'Ho conseguito il diploma di scuola superiore nell’anno 1995  presso l’Istituto Odontotecnico Piero Gaslini- di Genova ed ho ottenuto l’Abilitazione Odontotecnica.'
                                .PHP_EOL.
                                'Durante gli anni di studi e subito dopo il conseguimento del Diploma ho potuto frequentare un laboratorio odontotecnico come stagista, dove ho appreso le metodiche di realizzazione delle protesi mobili e fisse.',
                'twitter' => 'https://twitter.com/dottlucagiachin',
                'facebook' => 'https://www.facebook.com/studiodentisticogiachin',
                'instagram' => 'https://www.instagram.com/studiodentistico_dott.giachin/',
                'googlePlus' => 'https://google.com/+studiodentisticogiachingenova',
                'portrait' => '/media/portraits/Daniela-Damanti.jpg'
            ],[
                'name' => 'Federico',
                'surname' => 'Leopizzi',
                'role' => 'Igienista Dentale',
                'age' => 30,
                'description' => "Mi chiamo Federico Leopizzi nato a Genova nel 1992."
                                .PHP_EOL.
                                "Ho conseguito il diploma di scuola superiore nell’anno 2011 presso l’istituto Piero Gaslini – odontotecnico di Genova."
                                .PHP_EOL.
                                "Successivamente ho deciso di intraprendere gli studi presso l’Università di Genova seguendo il corso di laurea in igiene dentale laureandomi nell’anno 2018."
                                .PHP_EOL.
                                "Svolgo la mia professione lavorativa presso diversi studi della provincia di Genova.",
                'twitter' => 'https://twitter.com/dottlucagiachin',
                'facebook' => 'https://www.facebook.com/studiodentisticogiachin',
                'instagram' => 'https://www.instagram.com/studiodentistico_dott.giachin/',
                'googlePlus' => 'https://google.com/+studiodentisticogiachingenova',
                'portrait' => '/media/portraits/Federico-Leopizzi.jpg'
            ],[
                'name' => 'Mara',
                'surname' => 'Ferrari',
                'role' => 'Odontoiatra',
                'age' => 45,
                'description' => "Mi chiamo Mara Ferrari"
                                .PHP_EOL.
                                "Dottoressa Odontoiatra laureata  con 110/110 con lode. Ho iniziato a svolgere la professione nel 1999 presso studi privati, effettuando diverse consulenze ortodontiche presso studi di tutta la Liguria. Nel 2003 ho aperto il mio studio privato in Via Cairoli a Sori (Ge)."
                                .PHP_EOL.
                                "Tutt’ora collaboro con altri studi dentistici tra cui quello del Dr. Luca Giachin."
                                .PHP_EOL.
                                "Dal 1999 al 2002 ho frequentato il Corso Triennale di Ortodonzia presso il Centro Studi e Ricerche di Ortodonzia del Prof. Cozzani. Nel 2013 ho frequentato a Cuba il Corso su Paziente di Implantologia  della durata di una settimana. Nel 2015 ho frequentato il Corso Annuale di parodontologia del Dott. Parma Benfenati e successivamente ho conseguito il Diploma di Master Universitario di 2° livello di Implantoprotesi."
                                .PHP_EOL.
                                "Eseguo tutti i tipi di trattamenti ortodontici per adulti e bambini tra cui anche quelli certificati Invisalign.",
                'twitter' => 'https://twitter.com/dottlucagiachin',
                'facebook' => 'https://www.facebook.com/studiodentisticogiachin',
                'instagram' => 'https://www.instagram.com/studiodentistico_dott.giachin/',
                'googlePlus' => 'https://google.com/+studiodentisticogiachingenova',
                'portrait' => '/media/portraits/Mara-Ferrari.jpg'
            ]
        ]);
    }
}
