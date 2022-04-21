<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Basic',
            'slug' => 'basic',
            'stripe_plan_id' => 'prod_LY4MUijOpHao8N',
            'price' => 5,
            'description' => 'Basic plan',
        ]);

        Plan::create([
            'name' => 'Premium',
            'slug' => 'premium',
            'stripe_plan_id' => 'prod_LY4MNGQHMTmCio',
            'price' => 50,
            'description' => 'Premium plan',
        ]);
    }
}
