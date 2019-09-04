<?php

use Illuminate\Database\Seeder;

class ToothBrushTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ToothBrush::class,10)->create()->each(function ($toothbrush) {
            $toothbrush->user()->save(
        factory(App\User::class)->make());
        for ($i=0; $i<=10; $i++) {
        $toothbrush->brushes()->save(
        factory(App\Brush::class)->make());
        }
                   
        });

        
    }
}

