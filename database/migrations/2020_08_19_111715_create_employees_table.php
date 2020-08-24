<?php

use Faker\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('photo')->default('default_image.jpg');
            $table->string('status')->default('1');
            $table->timestamps();
        });

		$faker = Factory::create();
		for($i=1; $i<=10; $i++){
			$gender = $faker->randomElement(['male', 'female']);
			DB::table('employees')->insert([
				'name' => $faker->name($gender),
				'email' => $faker->email,
				'gender' => $gender,
				'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'photo' => 'default_image.jpg'
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
        Schema::dropIfExists('employees');
    }
}
