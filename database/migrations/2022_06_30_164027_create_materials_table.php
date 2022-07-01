<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enum\Material\MaterialTypesEnum;
use App\Models\Material;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('materials', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('authors');
      $table->string('description');
      $table->enum('type', getMaterialTypesEnum());
      $table->timestamps();
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
    Schema::dropIfExists('materials');
  }
};
