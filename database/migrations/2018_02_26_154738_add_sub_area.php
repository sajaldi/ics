<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubArea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('areas', function (Blueprint $table) {
        $table->integer('subArea')->unsigned()->nullable();
        $table->foreign('subArea')->references('id')->on('areas');
    });
    }



    public function down()
    {
      Schema::table('areas', function (Blueprint $table) {
        $table->dropForeign('products_category_id_foreign');
        $table->dropColumn('subArea');
    });
  }

}
