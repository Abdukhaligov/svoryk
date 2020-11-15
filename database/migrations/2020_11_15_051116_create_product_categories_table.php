<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('product_categories', function(Blueprint $table) {
      $table->id();
      $table->string("name");
      $table->bigInteger("parent_id")->unsigned()->nullable();
      $table->foreign("parent_id")
            ->references("id")
            ->on("product_categories")
            ->onDelete("SET NULL");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('product_categories');
  }
}
