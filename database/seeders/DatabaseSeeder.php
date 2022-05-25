<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Float_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        //brand
        DB::table('brands')->insert([
            'name' => 'Glock',
        ]);
        DB::table('brands')->insert([
            'name' => 'S&W',
        ]);
        DB::table('brands')->insert([
            'name' => 'CZ',
        ]);
        DB::table('brands')->insert([
            'name' => 'Glock',
        ]);
        DB::table('brands')->insert([
            'name' => 'Grand Power',
        ]);
        DB::table('brands')->insert([
            'name' => 'Сайга',
        ]);
        DB::table('brands')->insert([
            'name' => 'Вепрь',
        ]);
        DB::table('brands')->insert([
            'name' => 'Tokyo Marui',
        ]);
        DB::table('brands')->insert([
            'name' => 'КО',
        ]);
        DB::table('brands')->insert([
            'name' => 'ППШ',
        ]);
        //categories
        DB::table('categories')->insert([
            'name' => 'Автомат',
        ]);
        DB::table('categories')->insert([
            'name' => 'Пістолет',
        ]);
        DB::table('categories')->insert([
            'name' => 'Дробовик',
        ]);
        DB::table('categories')->insert([
            'name' => 'Карабін',
        ]);
        DB::table('categories')->insert([
            'name' => 'Хайповое',
        ]);
        DB::table('categories')->insert([
            'name' => 'Мега-Хайповое',
        ]);
        DB::table('categories')->insert([
            'name' => 'Хайповее некуда',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ну пойдет',
        ]);
        DB::table('categories')->insert([
            'name' => 'Такое',
        ]);
        DB::table('categories')->insert([
            'name' => 'Говно',
        ]);
        //admin_user
        DB::table('admin_users')->insert([
            'name' => 'Евгений',
            'email'=> 'kazheepro@gmail.com',
            'password' => bcrypt('evgenii228')
        ]);
        //guns
        DB::table('guns')->insert([
            'brand_id' => 3,
            'category_id' => 4,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 2,
            'category_id' => 3,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 1,
            'category_id' => 1,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 5,
            'category_id' => 3,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 2,
            'category_id' => 1,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 6,
            'category_id' => 2,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 4,
            'category_id' => 5,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 5,
            'category_id' => 5,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 6,
            'category_id' => 1,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 4,
            'category_id' => 4,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 1,
            'category_id' => 2,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 4,
            'category_id' => 4,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 3,
            'category_id' => 3,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 6,
            'category_id' => 6,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 7,
            'category_id' => 7,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 4,
            'category_id' => 5,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        DB::table('guns')->insert([
            'brand_id' => 3,
            'category_id' => 1,
            'name' => Str::random(16),
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => rand(1, 10),
            'weight_wo_bullet' => rand(1, 30),
            'width' => rand(1, 10),
            'height' => rand(1, 10),
            'barrel_length' => rand(1, 60),
            'barrel_cutting' => rand(1, 32),
            'about' => Str::random(360),
        ]);
        //users
        for($i = 0; $i<50; $i++)
        {
            DB::table('users')->insert([
                'fname' => Str::random(25),
                'sname' => Str::random(20),
                'pname' => Str::random(16),
                'birthday'  => '2019-02-03',
                'email'  => Str::random(16)."@gmail.com",
                'phone' => "+38(068)".Str::random(8),
                'photo' => '',
                'password' => '123',
            ]);
        }
        for($i = 0; $i<30; $i++)
        {
            DB::table('instructors')->insert([
                'name' => Str::random(30),
                'about' => Str::random(250),
                'created_at' => '2019-02-3'
            ]);
        }
    }
}
