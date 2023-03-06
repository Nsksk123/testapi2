<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('regions')->insert([
            [
                'district' => 'Boyolali',
                'province' => 'Jawa tengah'
            ],
            [
                'district' => 'Tengaran',
                'province' => 'Jawa tengah'
            ],
            [
                'district' => 'Salatiga',
                'province' => 'Jawa tengah'
            ],
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Natanael',
                'id_card' => 21099,
                'password' => Hash::make('1234'),
                'born_date' => '17-05-06',
                'address' => 'Wonosari',
                'gender' => 'laki-laki',
                "role" => 'society',
                'region' => 'Boyolali'
            ],
            [
                'name' => 'Alpin',
                'id_card' => 21098,
                'password' => Hash::make('123'),
                'born_date' => '17-05-06',
                'address' => 'Wonosari',
                'gender' => 'laki-laki',
                "role" => 'society',
                'region' => 'Salatiga'
            ],
            [
                'name' => 'Rizky',
                'id_card' => 21097,
                'password' => Hash::make('12'),
                'born_date' => '17-05-06',
                'address' => 'Wonosari',
                'gender' => 'laki-laki',
                "role" => 'society',
                'region' => 'Tengaran'
            ],
            [
                'name' => 'Yohanes',
                'id_card' => 21096,
                'password' => Hash::make('1'),
                'born_date' => '17-05-06',
                'address' => 'Wonosari',
                'gender' => 'laki-laki',
                "role" => 'society',
                'region' => 'Boyolali'
            ],
            [
                'name' => 'dr.Natanael',
                'id_card' => 11099,
                'password' => Hash::make('12345'),
                'born_date' => '17-05-06',
                'address' => 'Wonosari',
                'gender' => 'laki-laki',
                "role" => 'doctor',
                'region' => 'Boyolali'
            ],
            ]);
            DB::table('spots')->insert([
                [
                    'name' => 'Natan Hospital',
                    'address' => 'Boyolali',
                    'serve' => 1,
                    'capacity' => 15,
                    'region' => 'Boyolali',
                ],
                [
                    'name' => 'alpin Hospital',
                    'address' => 'Tengaran',
                    'serve' => 1,
                    'capacity' => 15,
                    'region' => 'Tengaran',
                ],
                [
                    'name' => 'asdasd Hospital',
                    'address' => 'Salatiga',
                    'serve' => 1,
                    'capacity' => 15,
                    'region' => 'Salatiga',
                ],
            ]);
            DB::table('vaccines')->insert([
                [
                    'vaccine_name' => 'Sinovac',
                    'stock' => 3,
                    'spot_id' => 1
                ],
                [
                    'vaccine_name' => 'Sinovac',
                    'stock' => 3,
                    'spot_id' => 2
                ],
                [
                    'vaccine_name' => 'Sinovac',
                    'stock' => 3,
                    'spot_id' => 3
                ],
                [
                    'vaccine_name' => 'Astraveneca',
                    'stock' => 3,
                    'spot_id' => 1
                ],
                [
                    'vaccine_name' => 'Astraveneca',
                    'stock' => 3,
                    'spot_id' => 2
                ],
                [
                    'vaccine_name' => 'Astraveneca',
                    'stock' => 3,
                    'spot_id' => 3
                ],
                [
                    'vaccine_name' => 'Moderna',
                    'stock' => 3,
                    'spot_id' => 1
                ],
                [
                    'vaccine_name' => 'Moderna',
                    'stock' => 3,
                    'spot_id' => 2
                ],
                [
                    'vaccine_name' => 'Moderna',
                    'stock' => 3,
                    'spot_id' => 3
                ],
                [
                    'vaccine_name' => 'Pfizer',
                    'stock' => 3,
                    'spot_id' => 1
                ],
                [
                    'vaccine_name' => 'Pfizer',
                    'stock' => 3,
                    'spot_id' => 2
                ],
                [
                    'vaccine_name' => 'Pfizer',
                    'stock' => 3,
                    'spot_id' => 3
                ],
                [
                    'vaccine_name' => 'Sinnopharm',
                    'stock' => 3,
                    'spot_id' => 1
                ],
                [
                    'vaccine_name' => 'Sinnopharm',
                    'stock' => 3,
                    'spot_id' => 2
                ],
                [
                    'vaccine_name' => 'Sinnopharm',
                    'stock' => 3,
                    'spot_id' => 3
                ],
            ]);

            DB::table('spot_details')->insert([
                [
                'date' => date('Y-m-d'),
                'vaccinations_count' => 12,
                'spot_id' => 1
                ],
                [
                'date' => date('Y-m-d'),
                'vaccinations_count' => 12,
                'spot_id' => 2
                ],
                [
                'date' => date('Y-m-d'),
                'vaccinations_count' => 12,
                'spot_id' => 3
                ],
                [
                'date' => date('2006-05-17'),
                'vaccinations_count' => 12,
                'spot_id' => 3
                ],
            ]);
    }
}
