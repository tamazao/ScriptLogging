<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = [['name' => 'Eligibility'],
                    ['name' => 'Accumulators'],
                    ['name' => 'Claim Load'],
                    ['name' => 'PBM'],
                    ['name' => 'Data Extract'],
                    ['name' => 'Scanning'],
                    ['name' => 'Workflow']];
        DB::table('categories')->insert($dataset);
    }
}
