<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_id');
            $table->unsignedBigInteger('category_id');

            $table->text('description');
            $table->text('iframe');
            $table->text('image')->nullable();
            $table->timestamps();

            $table->foreign('exam_id')->references('id')->on('exams')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('questions');
     /* Schema::table('questions', function (Blueprint $table){
        $table->dropForeign('questions_exam_id_foreign');
        $table->dropForeign('questions_category_id_foreign');
      });*/

    }
}
