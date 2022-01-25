<?php

namespace Database\Seeders;

use App\Models\mgroup;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mgroup::insert([
            [
                'txtGroup' => 'KOPASUS',
                'intTarget' => 4000,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'TONTAIPUR',
                'intTarget' => 5822,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'DENSUS 88',
                'intTarget' => 4321,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => '81 GULTOR',
                'intTarget' => 4022,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'PASKHAS',
                'intTarget' => 6147,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'SATBRAVO 90',
                'intTarget' => 4522,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'DENJAKA',
                'intTarget' => 4022,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'BATALYON RAIDER',
                'intTarget' => 3033,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'KOPASKA',
                'intTarget' => 10000,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'txtGroup' => 'YONTAIFIB',
                'intTarget' => 2026,
                'intDefaultTarget' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
