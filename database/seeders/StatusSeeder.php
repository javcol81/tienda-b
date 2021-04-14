<?php
namespace Database\Seeders;
use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		Status::create([
			'name' => 'En proceso',
			'percent' => 10,
		]);
		Status::create([
			'name' => 'Pedido en preparación',
			'percent' => 30,
		]);
		Status::create([
			'name' => 'Su pedido llegará entre 20 y 30 minutos',
			'percent' => 50,
		]);
		Status::create([
			'name' => 'Su pedido llegará entre 30 y 40 minutos',
			'percent' => 70,
		]);
		Status::create([
			'name' => 'El delivery está saliendo',
			'percent' => 100,
		]);
        //
    }
}
