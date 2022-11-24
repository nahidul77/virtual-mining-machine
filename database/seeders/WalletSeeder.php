<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->delete();

        DB::table('wallets')->insert([
            'user_id' => 2,
            'bdt' => '10000',
            'coin' => '100',
        ]);
    }
}
