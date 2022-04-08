<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price', 9, 2);
            $table->double('price_was', 9, 2)->nullable();
            $table->enum('condition', ['new', 'used']);
            $table->string('origin')->nullable();
            $table->boolean('is_available')->default(true);
            $table->text('description')->nullable();
            $table->foreignId('workshop_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('items');
    }
}
