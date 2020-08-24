<?php

use Faker\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');                       
            $table->string('position');                     
            $table->string('salary');                     
            $table->timestamps();
        });

		$faker = Factory::create();
		for($i=1; $i<=10; $i++){
			$position = $faker->jobTitle;

			DB::table('salaries')->insert([
				'employee_id' => $i,
				'position' => $position,
				'salary' => rand(50000, 80000)
			]);

			DB::table('job_types')->insertOrIgnore([
				'position' => $position,
			]);
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
