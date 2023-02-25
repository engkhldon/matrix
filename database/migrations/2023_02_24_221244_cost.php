<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('cost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
			$table->float('value', 20, 5);
			$table->integer('projectid');
			$table->integer('currencyid');
		  // $table->foreign('currencyid')->references('id')->on('currency');
		   // $table->foreign('projectid')->references('id')->on('project');
		   
    });
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('cost');
    }
};
