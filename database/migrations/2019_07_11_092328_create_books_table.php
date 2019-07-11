<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->text('title'); //本のタイトル
            $table->text('author'); //本の著者
            $table->string('isbn'); //ISBN番号
            $table->integer('price'); //本の値段
            $table->text('publisher');
            $table->integer('status'); //本の状態 1 = 新品同様 2 = 古本 3 = 汚い
            $table->text('photo_path'); //S3の画像パス
            $table->timestamps();
            
            $table
            ->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
