<?php

use Illuminate\Database\Seeder;
use fooCart\src\Manufacturer;

class ManufacturersTableSeeder extends Seeder {

    public function run()
    {
        Manufacturer::create(array(
            'manufacturer'        => 'Bobbi Boss'
        ));
        Manufacturer::create(array(
            'manufacturer'        => 'Outre'
        ));
        Manufacturer::create(array(
            'manufacturer'        => 'Fashion Source'
        ));
        Manufacturer::create(array(
            'manufacturer'        => 'Freetress'
        ));
        Manufacturer::create(array(
            'manufacturer'        => 'Model Model'
        ));
        Manufacturer::create(array(
            'manufacturer'        => 'Milkyway'
        ));
    }

}