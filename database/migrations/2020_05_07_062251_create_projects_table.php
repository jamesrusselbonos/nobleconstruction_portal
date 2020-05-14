<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_name');
            $table->double('cost', 15, 2);
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->integer('client_id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('cline_pnumber');
            $table->string('status');
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
        Schema::dropIfExists('projects');
    }
}
