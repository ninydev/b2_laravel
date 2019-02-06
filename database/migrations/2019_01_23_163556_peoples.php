<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peoples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                // Create table for storing roles
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id'); // Ключ
            $table->string('name', 255); // Строковая - для имени
            $table->string('photo', 255)->nullable(); // Строковая - для имени
            $table->text('description'); // Описание
            $table->date('dateBirth'); // Дата рождения

            $table->boolean('isDirector')->default(0);
            $table->boolean('isProduser')->default(0);
            $table->boolean('isActor')->default(0);
            $table->boolean('isScreenWriter')->default(0);
            $table->boolean('isMusic')->default(0);

            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');

            $table->integer('author_id')->references('id')->on('users');
            $table->integer('last_author_id')->references('id')->on('users');
            $table->string('slug', 255)->unique();
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
                Schema::drop('peoples');
    }
}
