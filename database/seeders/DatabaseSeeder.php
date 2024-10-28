<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'username' => 'Antigoni',
            'email' => 'antigoni@gmail.com'
        ]);

        \App\Models\Record::create([
            'exported_id' => '1',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'link' => 'https://memoristudio.scify.org/flavor/522/cards',
            'link_text' => 'Παιχνίδι μνήμης',
            'date_of_creation' => '2016-05-21'
        ]);

        \App\Models\Record::create([
            'exported_id' => '2',
            'application' => 'Memor-i',
            'creator' => 'SCIFY',
            'link' => 'https://memoristudio.scify.org/flavor/442/cards',
            'link_text' => 'Παιχνίδι μνήμης με τον Θησέα',
            'date_of_creation' => '2017-05-21'
        ]);

        \App\Models\Record::create([
            'exported_id' => '3',
            'application' => 'Memor-i',
            'creator' => 'SCIFY',
            'link' => 'https://memoristudio.scify.org/flavor/325/cards',
            'link_text' => 'Modern items',
            'date_of_creation' => '2017-05-22'
        ]);

        \App\Models\Record::create([
            'exported_id' => '4',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα',
            'link' => 'https://memoristudio.scify.org/flavor/295/cards',
            'link_text' => 'Κύκλοι και γραμμές εν δράσει (λίγες κάρτες)',
            'date_of_creation' => '2017-05-23'
        ]);

        \App\Models\Record::create([
            'exported_id' => '5',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα',
            'link' => 'https://memoristudio.scify.org/flavor/288/cards',
            'link_text' => 'Πασχαλινα έθιμα',
            'date_of_creation' => '2018-05-24'
        ]);

        \App\Models\Record::create([
            'exported_id' => '6',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Aθηνα',
            'link' => 'https://memoristudio.scify.org/flavor/240/cards',
            'link_text' => 'Κύκλοι και γραμμές εν δράσει...',
            'date_of_creation' => '2018-05-25'
        ]);

        \App\Models\Record::create([
            'exported_id' => '7',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'link' => 'https://memoristudio.scify.org/flavor/232/cards',
            'link_text' => 'Οι Θεοί του Ολύμπου',
            'date_of_creation' => '2019-05-26'
        ]);

        \App\Models\Record::create([
            'exported_id' => '8',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'link' => 'https://memoristudio.scify.org/flavor/218/cards',
            'link_text' => 'Και αέρα στα πανιά μας !!!',
            'date_of_creation' => '2019-05-27'
        ]);

        \App\Models\Record::create([
            'exported_id' => '9',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'link' => 'https://memoristudio.scify.org/flavor/190/cards',
            'link_text' => 'Το ατύχημα των σχημάτων μια βροχερή μέρα!',
            'date_of_creation' => '2020-05-28'
        ]);

        \App\Models\Record::create([
            'exported_id' => '10',
            'application' => 'Memor-i',
            'creator' => 'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'link' => 'https://memoristudio.scify.org/flavor/177/cards',
            'link_text' => 'Μυστήριο στο μουσείο...',
            'date_of_creation' => '2020-05-28'
        ]);

        \App\Models\Record::create([
            'exported_id' => '1',
            'application' => 'dianoia',
            'creator' => 'SHAPES ΕU team',
            'link' => 'https://dianoia.scify.org/storage/resources/pdf/15_4-()_2021-12-03_07_08_04.pdf',
            'link_text' => 'Εναλλαγές',
            'date_of_creation' => '2018-05-25'
        ]);

        \App\Models\Record::create([
            'exported_id' => '2',
            'application' => 'dianoia',
            'creator' => 'SHAPES ΕU team',
            'link' => 'https://dianoia.scify.org/storage/resources/pdf/50_Attention2-Copycorrectly(Normal)_2021-12-03_08_12_58.pdf',
            'link_text' => 'Copy Correctly',
            'date_of_creation' => '2019-05-26'
        ]);

        \App\Models\Record::create([
            'exported_id' => '3',
            'application' => 'dianoia',
            'creator' => 'SHAPES ΕU team',
            'link' => 'https://dianoia.scify.org/storage/resources/pdf/115_1-()_2021-12-15_04_28_39.pdf',
            'link_text' => 'Σκίαση σχημάτων',
            'date_of_creation' => '2019-05-27'
        ]);

        // \App\Models\Record::create([
        //     'exported_id' => null,
        //     'application' => '',
        //     'creator' => '',
        //     'link' => '',
        //     'link_text' => '',
        //     'date_of_creation' => '2020-05-28'
        // ]);
    }
}
