<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
   
      $this->call(RoleTableSeeder::class);
      $this->call(StatusSeeder::class);
      $this->call(PaymentPlatformsTableSeeder::class);
      $this->call(CurrenciesTableSeeder::class);
	}
}
