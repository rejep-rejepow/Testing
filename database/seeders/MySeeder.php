<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Rejep',
                'email'=>'r.rejepovv@gmail.com',
                'password' => bcrypt(123456789),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('parentts')->insert([
            [
                'id' => 1,
                'name' => 'Мужской гардероб',
            ],
            [
                'id' => 2,
                'name' => 'Женский гардероб',
            ],
        ]);
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Одежда',
                'parent_id'=>1,
            ],
            [
                'id' => 2,
                'name' => 'Костюмы',
                'parent_id'=>1,
            ],
            [
                'id' => 3,
                'name' => 'Одежда',
                'parent_id'=>2,
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Koton коричневая',
                'price'=>50,
                'category_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Koton коричневая женская водолазка',
                'price'=>60,
                'category_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Koton коричневая женская водолазка',
                'price'=>250,
                'category_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

        ]);
    }
}
