<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        // Schema::create('job_post', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('job_title');
        //     $table->string('company_name');
        //     $table->string('job_description');
        //     $table->string('location');            
        //     $table->timestamps();
        // });

        // Schema::create('job_details', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('job_post_id');
        //     $table->date('post_date');
        //     $table->float('salary', 8, 2);
        //     $table->string('emp_type');
        //     $table->timestamps();
        // });
        Schema::create('person', function (Blueprint $table) {
            $table->string('name');
            $table->string('address');
            $table->integer('age');        
            $table->timestamps();    
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('users');
    }
}
