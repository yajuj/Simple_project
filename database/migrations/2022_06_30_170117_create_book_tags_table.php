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
    Schema::create('book_tags', function (Blueprint $table) {
      $table->unsignedBigInteger('book_id');
      $table->unsignedBigInteger('tag_id');

      $table->index('book_id', 'book_tag_book_idx');
      $table->index('tag_id', 'book_tag_tag_idx');

      $table->foreign('book_id', 'book_tag_book_fk')->on('books')->references('id');
      $table->foreign('tag_id', 'book_tag_tag_fk')->on('tags')->references('id');

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
    Schema::dropIfExists('book_tags');
  }
};
