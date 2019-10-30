<?php

use App\EachProduct;
use Illuminate\Database\Seeder;

class EachProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding our data
        EachProduct::create([
            'name' => 'tomatoes',
            'slug' => 'tomatoes',
             'details' => 'sold per kilogram',
             'price' => 100,
             'description' => 'Grown in Kitengela',
             

        ]);

        EachProduct::create([
            'name' => 'carrots',
            'slug' => 'carrots',
             'details' => 'sold per kilogram',
             'price' => 80,
             'description' => 'Grown in Kitale',
             
        ]);

        EachProduct::create([
            'name' => 'corriander',
            'slug' => 'corriander',
             'details' => 'sold per kilogram',
             'price' => 50,
             'description' => 'Grown in Kiambu',
            

        ]);

        EachProduct::create([
            'name' => 'avacados',
            'slug' => 'avacados',
             'details' => 'sold per kilogram',
             'price' => 100,
             'description' => 'Grown in Isinya',
             

        ]);

        EachProduct::create([
            'name' => 'maize',
            'slug' => 'maize',
             'details' => 'sold per kilogram, with the maize cob',
             'price' => 100,
             'description' => 'Grown in Eldoret',
           
        ]);

        EachProduct::create([
            'name' => 'potatoes',
            'slug' => 'potatoes',
             'details' => 'sold per kilogram',
             'price' => 70,
             'description' => 'Grown in Kericho',
             

        ]);

        EachProduct::create([
            'name' => 'onions',
            'slug' => 'onions',
             'details' => 'sold per kilogram',
             'price' => 90,
             'description' => 'Grown in Kitengela',
           

        ]);

        EachProduct::create([
            'name' => 'peas',
            'slug' => 'peas',
             'details' => 'sold per kilogram',
             'price' => 100,
             'description' => 'Grown in Kinangop',
          

        ]);

        EachProduct::create([
            'name' => 'mangoes',
            'slug' => 'mangoes',
             'details' => 'sold per kilogram',
             'price' => 120,
             'description' => 'Grown in Kiambu',
            
        ]);

        EachProduct::create([
            'name' => 'oranges',
            'slug' => 'oranges',
             'details' => 'sold per kilogram',
             'price' => 130,
             'description' => 'Grown in Isinya',
             

        ]);

    }
}
