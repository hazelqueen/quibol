<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Jets',
                'address' => 'ladz',
                'phone' => '09521552311',
                'capitalization' => 5055400,
                'loan' => 12650
            ],
            [
                'name' => 'apal',
                'address' => 'bert',
                'phone' => '095454541',
                'capitalization' => 3001250,
                'loan' => 2505644
            ],
            [
                'name' => 'edi',
                'address' => 'pilo',
                'phone' => '09571545',
                'capitalization' => 40440,
                'loan' => 408484
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
