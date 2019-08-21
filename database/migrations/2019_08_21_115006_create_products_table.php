<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('number');
            //$table->string('feature_id_1')
            //$table->string('feature_id_2')->unsigned()->index();
            //$table->string('feature_id_3')->unsigned()->index();
            $table->string('propertyA');
            $table->string('propertyB');
            $table->string('propertyC');
            $table->string('propertyD');
            $table->string('propertyE');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('feature_id_1')->references('id')->on('features');
            //$table->foreign('feature_id_2')->references('id')->on('features');
            //$table->foreign('feature_id_3')->references('id')->on('features');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
