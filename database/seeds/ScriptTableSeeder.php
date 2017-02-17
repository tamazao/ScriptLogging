<?php

use Illuminate\Database\Seeder;

class ScriptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = [
          ['name'=>'Handle-ADPFile',
           'TargetServer'=>'RCIHSP01',
           'Notes'=>'This handles the incoming files from ADP and creates change files for Eligibility to load into HSP.',
           'DateCreated'=>date('2017-01-01')
          ]
        ];
        DB::table('scripts')->insert($dataset);
    }
}
