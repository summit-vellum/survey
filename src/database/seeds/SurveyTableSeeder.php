<?php

use Illuminate\Database\Seeder;
use Quill\Survey\Models\Survey;

class SurveyTableSeeder extends Seeder
{
   	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Survey::class, 10)->create();
    }

}
