<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->foreignId('from_id')
                ->constrained('cities')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->foreignId('to_id')
                ->constrained('cities')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->float('km');
            $table->String('value');
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
        Schema::dropIfExists('travel');
    }
}
