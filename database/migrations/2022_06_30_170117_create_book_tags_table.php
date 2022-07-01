<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('material_tags', function (Blueprint $table) {
      $table->unsignedBigInteger('material_id');
      $table->unsignedBigInteger('tag_id');

      $table->index('material_id', 'material_tag_material_idx');
      $table->index('tag_id', 'material_tag_tag_idx');

      $table->foreign('material_id', 'material_tag_material_fk')->on('materials')->references('id');
      $table->foreign('tag_id', 'material_tag_tag_fk')->on('tags')->references('id');

      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('material_tags');
  }
};
