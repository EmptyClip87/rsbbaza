<?php

use Illuminate\Database\Seeder;
use App\Player;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'id' => 1,
            'name' => 'Igrac 01',
            'dob' => Carbon::parse('1985-07-11'),
            'age' => Carbon::parse('1985-07-11')->age,
            'nationality' => 'Srbija',
            'height' => 190,
            'preferred_foot' => 'Desna',
            'joined' => Carbon::parse('2017-08-15'),
            'signed_from' => 'Radnicki Nis',
            'contract_until' => Carbon::parse('2020-06-30'),
            'full_contract_wage' => '500000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Player::create([
            'id' => 2,
            'name' => 'Igrac 02',
            'dob' => Carbon::parse('1992-01-21'),
            'age' => Carbon::parse('1992-01-21')->age,
            'nationality' => 'Srbija',
            'height' => 181,
            'preferred_foot' => 'Leva',
            'joined' => Carbon::parse('2018-08-01'),
            'signed_from' => 'Roma',
            'contract_until' => Carbon::parse('2021-06-30'),
            'full_contract_wage' => '900000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Player::create([
            'id' => 3,
            'name' => 'Igrac 03',
            'dob' => Carbon::parse('1996-11-11'),
            'age' => Carbon::parse('1996-11-11')->age,
            'nationality' => 'Gana',
            'height' => 177,
            'preferred_foot' => 'Desna',
            'joined' => Carbon::parse('2019-01-22'),
            'signed_from' => 'Cukaricki',
            'contract_until' => Carbon::parse('2021-06-30'),
            'full_contract_wage' => '660000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
