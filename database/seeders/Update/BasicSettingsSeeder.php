<?php

namespace Database\Seeders\Update;

use App\Models\Admin\BasicSettings;
use Illuminate\Database\Seeder;

class BasicSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $data = [
            'web_version'   => "4.9.0",
        ];
        $basicSettings = BasicSettings::first();
        $basicSettings->update($data);
    }
}
