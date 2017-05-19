<?php

use Illuminate\Database\Seeder;
use fooCart\src\Category;


class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        Category::create(array(
            'category'        => 'Hair Extension'
        ));
        Category::create(array(
            'category'        => 'Old School Stuff'
        ));
        Category::create(array(
            'category'        => 'Weave'
        ));
        Category::create(array(
            'category'        => 'Wigs'
        ));
    }
}