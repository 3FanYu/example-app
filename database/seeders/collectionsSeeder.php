<?php

namespace Database\Seeders;

use App\Models\collections;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class collectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            DB::table('collections')->insert([
                'title' => Str::random(10),
                'subTitle' => Str::random(10),
                'bgColor' => Str::random(10),
                'iconImage' => Str::random(50),
            ]);
        }        
    }
}
