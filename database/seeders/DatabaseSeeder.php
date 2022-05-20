<?php

namespace Database\Seeders;

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
        //admin_user
        DB::table('admin_users')->insert([
            'name' => 'Евгений',
            'email'=> 'kazheepro@gmail.com',
            'password' => bcrypt('evgenii228')
        ]);
        //guns
        DB::table('guns')->insert([
            'brand_id' => 1,
            'name' => 'Glock-18',
            'type' => 'Пистолет',
            'caliber'  => '9mm',
            'clip'  => '12пт',
            'weight_bullet' => 3.2,
            'weight_wo_bullet' => 5,
            'length' => 10,
            'width' => 20,
            'height' => 30,
            'barrel_length' => 52,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 1,
            'name' => 'Glock-19c',
            'type' => 'Пистолет',
            'caliber'  => '9mm',
            'clip'  => '48пт',
            'weight_bullet' => 4,
            'weight_wo_bullet' => 3,
            'length' => 25,
            'width' => 4,
            'height' => 5,
            'barrel_length' => 15,
            'barrel_cutting' => 15
        ]);
        DB::table('guns')->insert([
            'brand_id' => 2,
            'name' => 'S&W 9mm pistol',
            'type' => 'Пистолет',
            'caliber'  => '9mm',
            'clip'  => '16пт',
            'weight_bullet' => 1,
            'weight_wo_bullet' => 2,
            'length' => 3,
            'width' => 5,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 1,
            'name' => 'Glock-35',
            'type' => 'Пистолет',
            'caliber'  => '.40S&W',
            'clip'  => '17пт',
            'weight_bullet' => 1.02,
            'weight_wo_bullet' => 2,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 3,
            'name' => 'P-09 Duty',
            'type' => 'Пистолет',
            'caliber'  => '9mm Parabellum',
            'clip'  => '19пт',
            'weight_bullet' => 1.02,
            'weight_wo_bullet' => 4,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 4,
            'name' => 'P19L',
            'type' => 'Пистолет',
            'caliber'  => '9x19 мм',
            'clip'  => '15пт',
            'weight_bullet' => 1.06,
            'weight_wo_bullet' => 12,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 5,
            'name' => 'CZ-75 SP-01 SHADOW',
            'type' => 'Пистолет',
            'caliber'  => '9mm Parabellum',
            'clip'  => '18пт',
            'weight_bullet' => 1.38,
            'weight_wo_bullet' => 1.38,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 6,
            'name' => 'K100',
            'type' => 'Пистолет',
            'caliber'  => '9mm Parabellum',
            'clip'  => '15пт',
            'weight_bullet' => 1.38,
            'weight_wo_bullet' => 1.38,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 7,
            'name' => 'Сайга 5,45х39 (АК 74)',
            'type' => 'Автомат',
            'caliber'  => '5,45х39 мм',
            'clip'  => '10пт',
            'weight_bullet' => 3.6,
            'weight_wo_bullet' => 1.38,
            'length' => 10,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 8,
            'name' => 'Вепрь-12',
            'type' => 'Дробовик',
            'caliber'  => '12/76',
            'clip'  => '10пт',
            'weight_bullet' => 4.5,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 9,
            'name' => 'СВД',
            'type' => 'Снайперка',
            'caliber'  => '7,62×54',
            'clip'  => '10пт',
            'weight_bullet' => 4.3,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 8,
            'name' => 'Вепрь-1В (ВПО-148, АК 74)',
            'type' => 'Карабин',
            'caliber'  => '5,45х39',
            'clip'  => '10пт',
            'weight_bullet' => 4.1,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 10,
            'name' => 'ППШ-Luger',
            'type' => 'Карабин',
            'caliber'  => '9х19',
            'clip'  => '10пт',
            'weight_bullet' => 4.15,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 6,
            'name' => 'САЙГА-9',
            'type' => 'Карабин',
            'caliber'  => '9х19',
            'clip'  => '10пт',
            'weight_bullet' => 4.15,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 7,
            'name' => 'КО-30-С',
            'type' => 'Снайперка',
            'caliber'  => '7,62×54R',
            'clip'  => '5пт',
            'weight_bullet' => 4.05,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => '8',
            'name' => 'Вепрь-15',
            'type' => 'Автомат',
            'caliber'  => '5,56×45',
            'clip'  => '35пт',
            'weight_bullet' => 3.2,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);
        DB::table('guns')->insert([
            'brand_id' => 10,
            'name' => 'Foliage Warrior',
            'type' => 'Пистолет',
            'caliber'  => '6мм',
            'clip'  => '28+1пт',
            'weight_bullet' => 1.02,
            'weight_wo_bullet' => 1.38,
            'length' => 112,
            'width' => 51,
            'height' => 12,
            'barrel_length' => 32,
            'barrel_cutting' => 32
        ]);


    }
}
