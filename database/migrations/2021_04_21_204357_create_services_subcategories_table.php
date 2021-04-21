<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')
            ->references('id')
            ->on('services');
            $table->foreignId('subcategory_id')
                ->references('id')
                ->on('subcategories');
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
        Schema::dropIfExists('services_subcategories');
    }
}
