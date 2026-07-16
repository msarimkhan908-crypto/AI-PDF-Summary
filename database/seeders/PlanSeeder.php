<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::query()->delete();

        Plan::create([
            'name'=>'Basic',
            'slug'=> 'basic',
            'description' => 'Perfect for getting started',
            'price' => 0,
            'pdf_limit'=> 10,
            'is_active'=> true,
            'features'=>json_encode([
                '10 PDFs per Month',
                'Standard summaries',
                'Email Support',
                'Basic Export Option',
            ])
        ]);


        Plan::create([
            'name'=>'Standard',
            'slug'=> 'standard',
            'description' => 'Best for regular users',
            'price' => 9.99,
            'pdf_limit'=> 50,
            'is_active'=> true,
            'features'=>json_encode([
                '50 PDFs per Month',
                'All summaries Types',
                'Priority Support',
                'Many Export Options',
                'Advanced Analytics',

            ])
        ]);


        Plan::create([
            'name'=>'Permium',
            'slug'=> 'permium',
            'description' => 'For Power Users',
            'price' => 29.99,
            'pdf_limit'=> 1,
            'is_active'=> true,
            'features'=>json_encode([
                'Unlimited PDFs',
                'All summaries Types',
                'Api Access',
                'Many Export Options',
                'Custom Integration',

            ])
        ]);
    }
}
