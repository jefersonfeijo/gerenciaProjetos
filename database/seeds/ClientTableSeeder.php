<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \gerenciaProjeto\Client::truncate();
        factory(\gerenciaProjeto\Client::class, 10)->create();
    }
}
