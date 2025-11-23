<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cety extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            'Badakhshan',
            'Badghis',
            'Baghlan',
            'Balkh',
            'Bamyan',
            'Parwan',
            'Paktia',
            'Paktika',
            'Panjshir',
            'Takhar',
            'Jawzjan',
            'Khost',
            'Daikundi',
            'Zabul',
            'Sar-e Pol',
            'Samangan',
            'Ghazni',
            'Ghor',
            'Faryab',
            'Farah',
            'Kunduz',
            'Kandahar',
            'Kabul',
            'Kapisa',
            'Kunar',
            'Laghman',
            'Logar',
            'Maidan Wardak',
            'Nangarhar',
            'Nuristan',
            'Nimruz',
            'Herat',
            'Helmand',
            'Uruzgan'
        ];

        foreach ($provinces as $province) {
            DB::table('ceties')->insert([
                'name' => $province,
            ]);
        }
    }
}
