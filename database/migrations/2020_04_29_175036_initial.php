<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Columnas de la tabla
            $table->bigIncrements('id'); //Se asigna primary automaticamente
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('rol')->nullable(false);
            $table->rememberToken();

            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');

            $table->timestamp('created_at')->nullable();
        });

        Schema::create('cashboxes', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('finish_date')->nullable(true);
            $table->integer('start_money');
            $table->integer('finish_money')->default(0);
            $table->unsignedBigInteger('user_id');

            // Index
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('direction');
            $table->string('mail');
            $table->string('phone', 15);
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stock');
            $table->string('name');
            $table->text('description');
            $table->string('img');
            $table->float('price', 11, 2);
            $table->float('tax', 5, 2);

            $table->timestamps();
        });

        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('client_id');

            $table->timestamps();

            // Index
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
        });

        Schema::create('tickets_products', function (Blueprint $table) {
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('product_id');
            $table->string('name');
            $table->integer('quantity');
            $table->float('price', 11, 2);
            $table->float('tax', 5, 2);

            // Index
            $table->primary(['ticket_id', 'product_id']);

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('product_id')->references('id')->on('products');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets_products');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('products');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('cashboxes');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('users');
    }
}
