<?php

use Illuminate\Database\Seeder;
use fooCart\src\Product;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        //Standard seeder
        Product::create(array(
            'sku'               => 'FC-HDTV00000001',
            'manufacturer_id'   => 1,
            'category_id'       => 3,
            'name'              => 'French Wave Remi 18" ',
            'price'             => 118.00,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => NULL,
            'shipping_cost'     => 22.16,
            'units_sold'        => 0,
            'number_available'  => 28,
            'tax_id'            => 1,
            'active'            => true
        ));
        Product::create(array(
            'sku'               => 'FC-HDTV00000002',
            'manufacturer_id'   =>  1,
            'category_id'       =>  3,
            'name'              => 'Fine Silky Remi',
            'price'             => 459.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => NULL,
            'shipping_cost'     => 34.16,
            'units_sold'        => 2,
            'number_available'  => 7,
            'tax_id'            => 1,
            'active'            => true
        ));
        Product::create(array(
            'sku'               => 'FC-HDTV00000003',
            'manufacturer_id'   => 2,
            'category_id'       => 3,
            'name'              => 'velvet remi lace parting 10"',
            'price'             => 19.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => NULL,
            'shipping_cost'     => 21.47,
            'units_sold'        => 29,
            'number_available'  => 3,
            'tax_id'            => 1,
            'active'            => true
        ));
        
        Product::create(array(
            'sku'               => 'FC-COMP00000001',
            'manufacturer_id'   => 1,
            'category_id'       => 2,
            'name'              => 'Moisture remy 3pcs',
            'price'             => 24.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => null,
            'shipping_cost'     => 32.15,
            'units_sold'        => 27,
            'number_available'  => 61,
            'tax_id'            => 1,
            'active'            => true
        ));
       
        Product::create(array(
            'sku'               => 'FC-MOBI00000001',
            'manufacturer_id'   => 4,
            'category_id'       => 4,
            'name'              => 'oval part long bob',
            'price'             => 32.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => 25.00,
            'shipping_cost'     => 2.00,
            'units_sold'        => 1,
            'number_available'  => 4,
            'tax_id'            => 3,
            'active'            => true
        ));
        Product::create(array(
            'sku'               => 'FC-MOBI00000002',
            'manufacturer_id'   => 2,
            'category_id'       => 4,
            'name'              => 'Penny Outre',
            'price'             => 19.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => null,
            'shipping_cost'     => 4.15,
            'units_sold'        => 1,
            'number_available'  => 4,
            'tax_id'            => 3,
            'active'            => true
        ));
        Product::create(array(
            'sku'               => 'FC-MOBI00000010',
            'manufacturer_id'   => 3,
            'category_id'       => 1,
            'name'              => 'Fashion source clip-on',
            'price'             => 122.99,
            'short_desc'        => 'Short description of product goes here.',
            'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
            'sale_price'        => null,
            'shipping_cost'     => 14.15,
            'units_sold'        => 1,
            'number_available'  => 4,
            'tax_id'            => 3,
            'active'            => true
        ));
        Product::create(array(
        		'sku'               => 'FC-MOBI00000011',
        		'manufacturer_id'   => 1,
        		'category_id'       => 1,
        		'name'              => 'Fusion Hair Extension 14"',
        		'price'             => 122.99,
        		'short_desc'        => 'Short description of product goes here.',
        		'long_desc'         => 'This is the long description of the product. This description appears on the product detail page.',
        		'sale_price'        => null,
        		'shipping_cost'     => 14.15,
        		'units_sold'        => 1,
        		'number_available'  => 4,
        		'tax_id'            => 3,
        		'active'            => true
        ));
       
    }
}